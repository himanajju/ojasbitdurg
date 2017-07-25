<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorization extends CI_Controller {
	
	private $data;
	public $em;    
	
	public function __construct() {
		parent::__construct();					
		$this->em = $this->doctrine->em;
    }
    
    public function login(){
        if($this->session->userdata('userData') != null){
            redirect(base_url());
        }
        $data["errorMessage"]="";
	     //validating form fields
		$this->form_validation->set_rules('email', 'Email', 'required'); 
		$this->form_validation->set_rules('password', 'Password', 'required'); 

        if($this->form_validation->run() != FALSE){
            $userOBJ = $this->em->getRepository('Users')->findOneBy(array("email" => $this->input->post('email'), "password" => $this->input->post('password')));
		    if($userOBJ == NULL){
                $data['errorMessage'] = "Invalid Username/Password.";
			}else{
                $userData = array('id' => $userOBJ->getId(),
                                  'email' => $userOBJ->getEmail(),
                                  'name' => $userOBJ->getUserdata()->getName(),
                                  'contact_no' => $userOBJ->getContactNo(),
                                  'usergroup' => $userOBJ->getUsergroup()->getTitle(),
                                  'semester' => $userOBJ->getUserdata()->getSemester(),
                                  'gender' => $userOBJ->getUserdata()->getGender());

                $events = $this->em->getRepository("StudentEvents")->findBy(array("student" => $userOBJ));
                $eventData = array();

                foreach ($events as $data) {    
                    array_push($eventData,$data->getEvent()->getId());
                }
                $userData['eventData'] = $eventData;

                $this->session->set_userdata('userData', $userData);
                redirect(base_url());
            }
        }
        $this->load->view('login',$data);
    }
    
    
    public function register(){
        if($this->session->userdata('userData') != null){
            redirect(base_url());
        }
        $data["errorMessage"]="";
	     //validating form fields
        
        if($this->input->post() != null){
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[30]|matches[confirm_password]'); 
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required'); 
            $this->form_validation->set_rules('admission_no', 'Admission No', 'trim|required');
            $this->form_validation->set_rules('contact_no', 'Contact No', 'trim|required|min_length[10]|max_length[10]'); 

            if($this->form_validation->run() != FALSE){
                $userOBJ = new Users();

                $admissionNo = $this->input->post("admission_no");
                $userdataOBJ = $this->em->getRepository("Userdata")->findOneBy(array("admissionNo" => $admissionNo));
                if($userdataOBJ != null){
                    if($userdataOBJ->getIsRegistered() != "1"){
                        $group = $this->em->getRepository("Usergroups")->findOneBy(array("title" => "STUDENT"));

                        // $ojasID = "OJS-".100000;

                        $userOBJ->setUsergroup($group);
                        $userOBJ->setUserdata($userdataOBJ);
                        $userOBJ->setEmail(strtolower($this->input->post("email")));
                        $userOBJ->setPassword($this->input->post("password"));
                        $userOBJ->setContactNo($this->input->post("contact_no"));
                        $userOBJ->setCreatedAt(date_create(date("Y-m-d H:i:s")));
                        try{
                            $this->em->persist($userOBJ);
                            $this->em->flush();

                            try{
                                $userdataOBJ->setIsRegistered(1);
                                $this->em->flush();
                            }catch(Exception $e){
                                print_r($e);die;
                            }
                            $userData = array('id' => $userOBJ->getId(),
                                              'email' => $userOBJ->getEmail(),
                                              'name' => $userOBJ->getUserdata()->getName(),
                                              'contact_no' => $userOBJ->getContactNo(),
                                              'usergroup' => $userOBJ->getUsergroup()->getTitle(),
                                              'semester' => $userOBJ->getUserdata()->getSemester(),
                                              'gender' => $userOBJ->getUserdata()->getGender());


                            $userData['eventData'] = array();
                            $this->session->set_userdata('userData', $userData);
                            redirect(base_url());
                        }catch(Exception $e){
                            $response = array("status" => "203",
                                              "message" => "Something went wrong please contact to administrator.");
                        }
                    }else{
                        $data['errAdmission'] = "Unauthorized access.";
                    }
                }else{
                    $data['errAdmission'] = "Invalid Admission No.";
                }
            }
        }
        $this->load->view('register',$data);
    }
    
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
	}
}
    
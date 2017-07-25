<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $data;
    public $em;

    public function __construct() {
        parent::__construct();

        if($this->session->userdata('sessionData') == null){
            redirect(base_url());
        }        
        $this->load->model('dashboard_model');
        $this->em = $this->doctrine->em;
    }

    private function render_view($view,$data = null){
        $this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");  

        $data['sessionData'] = $this->session->userdata("sessionData");
        $this->load->view('back_end/includes'."/header",$data);
        $this->load->view('back_end/includes'."/nav_top",$data);
        $this->load->view('back_end/includes'."/nav_left",$data);
        $this->load->view('back_end/'.$view,$data);
        $this->load->view('back_end/includes'."/footer",$data);
    }

    public function index(){
        $data["active_nav"] = array("dashboard","");
        $data['section'] = "OJAS 2017";
        $data['title'] = "Home";
        $this->render_view("dashboard",$data);
    }

    //////////////////////////////
    //                          //
    //       USERS SECTION      //
    //                          //
    //////////////////////////////
    
    public function addNewUser(){
        $data['error'] = "";
	     //validating form fields
        if($this->input->post() != null){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password', 'required|match[confirm_password]'); 
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required'); 
            $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('user_type', 'User Type', 'required'); 
            if($this->input->poat('user_type') != 'ADMIN'){
                $this->form_validation->set_rules('semester', 'Semester', 'required'); 
                $this->form_validation->set_rules('admission_no', 'Admission No', 'required'); 
            }
            $this->form_validation->set_rules('gender', 'Gender', 'required'); 
            $this->form_validation->set_rules('contact_no', 'Contact No', 'required'); 

            if($this->form_validation->run() != FALSE){
                $checkUser = $this->em->getRepository('Users')->findOneBy(array("email" => $this->input->post('email')));
                if($checkUser != NULL){
                    $data['error'] = "Email already exists.";
                }else{
                    $userOBJ = new Users();

                    if($this->input->poat('user_type') == 'ADMIN'){
                        $group = $this->em->getRepository("Usergroups")->findOneBy(array("title" => "ADMIN"));
                    }else{
                        $group = $this->em->getRepository("Usergroups")->findOneBy(array("title" => "STUDENT"));

                        $userOBJ->setAdmissionNo($this->input->post("admission_no"));
                        $userOBJ->setSemester($this->input->post("semester"));
                    }
                    $userOBJ->setUsergroup($group);
                    $userOBJ->setEmail(strtolower($this->input->post("email")));
                    $userOBJ->setPassword($this->input->post("password"));
                    $userOBJ->setName(ucwords(strtolower($this->input->post("name"))));
                    $userOBJ->setGender($this->input->post("gender"));
                    $userOBJ->setContactNo($this->input->post("contact_no"));

                    $userOBJ->setCreatedAt(date_create(date("Y-m-d H:i:s")));
                    try{
                        $this->em->persist($userOBJ);
                        $this->em->flush();             

                        $this->session->set_flashdata('Success',"User created successfully.");
                        redirect(base_url()."admin/all-users");
                    }catch(Exception $e){
                        print_r($e);die;
                        $this->session->set_flashdata('Error',"Oops!! Something went wrong... please try again later.");
                        redirect(base_url()."admin/add-new-user");
                    }
                }
            }
        }
        $data['title'] = "Add New User";
        $this->render_view("user_add",$data);
    }

    public function allUsers(){
        $data['allUsers'] = $this->em->getRepository('Users')->findAll();

        $data['title'] = "All Users";
        $this->render_view("users_all",$data);
    }    
    
    //////////////////////////////
    //                          //
    //    USER SECTION ENDS     //
    //                          //
    //////////////////////////////
}

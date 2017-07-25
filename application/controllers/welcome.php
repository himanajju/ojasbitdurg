<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    private $data;
    public $em;    
    
    public function __construct() {
        parent::__construct();                  
        $this->em = $this->doctrine->em;
    }
    
    public function index()
    {        
        $this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");  

        $data = "";
        if($this->session->userdata('userData') != null){
            $data['userdata'] = $this->session->userdata('userData');
        }
        $this->load->view('ojas',$data);
    }

    public function participate(){
        if($this->session->userdata('userData') != null){
            $eventId = $this->input->post('eventId');

            $studentOBJ = $this->em->getRepository("Users")->findOneBy(array("id" => $this->session->userdata('userData')['id']));
            $eventOBJ = $this->em->getRepository("Events")->findOneBy(array("id" => $eventId));
            if($eventOBJ != null && $studentOBJ != null){
                $studentEventOBJ = new StudentEvents();

                $studentEventOBJ->setStudent($studentOBJ);
                $studentEventOBJ->setEvent($eventOBJ);
                $studentEventOBJ->setCreatedAt(date_create(date('Y-m-d H:i:s')));
                try{
                    $this->em->persist($studentEventOBJ);
                    $this->em->flush();
                    
                    $userData = array('id' => $studentOBJ->getId(),
                                      'email' => $studentOBJ->getEmail(),
                                      'name' => $studentOBJ->getUserdata()->getName(),
                                      'contact_no' =>$studentOBJ->getContactNo(),
                                      'usergroup' => $studentOBJ->getUsergroup()->getTitle(),
                                      'semester' => $studentOBJ->getUserdata()->getSemester(),
                                      'gender' => $studentOBJ->getUserdata()->getGender());

                    $events = $this->em->getRepository("StudentEvents")->findBy(array("student" => $studentOBJ));
                    $eventData = array();

                    foreach ($events as $data) {    
                        array_push($eventData,$data->getEvent()->getId());
                    }
                    $userData['eventData'] = $eventData;

                    $this->session->set_userdata('userData', $userData);
                    
                    // print_r($this->session->userdata('userData'));die;

                    $response = array("status" => "200",
                                      "message" => "Participated.");
                }catch(Exception $e){
                    $response = array("status" => "203",
                                      "message" => "Something went wrong please contact to administrator.");
                }
            }else{
                $response = array("status" => "203",
                                  "message" => "Illegal operation performed.");
            }
        }
        echo json_encode($response);die;
    }
}
<?php
//including all entity classes
foreach (scandir(dirname(APPPATH."models/Entities/*")) as $filename) {
    $path = dirname(APPPATH."models/Entities/*") . '/' . $filename;
    if (is_file($path) && strpos($path,"php")) {
        require $path;
    }
}

class Doctrine_model extends CI_Model {	

	public $em;
	function __construct() {
		$this->load->library("doctrine");
		$this->em = $this->doctrine->em;
	}
}	
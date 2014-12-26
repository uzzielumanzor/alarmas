<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function index(){
		$this->load->helper(array('form','html'));
		$this->load->view('login_view');
		
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ValidarLogin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('login_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {

        $this->form_validation->set_rules('user', 'User', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass', 'Pass', 'trim|required|xss_clean|callback_check_database');

 
        if($this->form_validation->run() == FALSE) {
            echo "<script>alert('Usuario Invalido');</script>";
            redirect(base_url(), 'refresh');
           
        } 
        else {
            redirect(base_url('index.php/home'), 'refresh');
        }       
    }
    
    function check_database($pass) {
        $username = $this->input->post('user');
        $result = $this->login->login($username, $pass);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                $sess_array = array('username' => $row->username,
                    'userpass' => $row->userpass);
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }
}
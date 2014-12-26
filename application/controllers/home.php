<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('login_model','',TRUE);
        $this->load->model('Home_model', 'home');
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        if($this->session->userdata('logged_in')){
            $result['alarma'] = $this->home->show();
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['userpass'];
            $this->load->view('home_view', $result);
        } else {
        //If no session, redirect to login page
            redirect(base_url(), 'refresh');
        }
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url(), 'refresh');
     }
 
}
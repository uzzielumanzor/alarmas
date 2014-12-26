<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('username, userpass');
        $this->db->from('usuario');
        $this->db->where('username', $username);
        $this->db->where('userpass', $password);
        $this->db->limit(1);
         
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}
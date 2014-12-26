<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Home_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function show(){
        
        $this->db->select('comentario, fecha, ciudad');
        $this->db->from('alarma');
        
        $query = $this->db->get();
        if($query->num_rows() > 0) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}
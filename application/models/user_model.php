<?php

class User_model extends CI_Model {

   public function __construct() {
      $this->load->database();
   }

   public function get_users($id = FALSE) {
      if ($id === FALSE) {
         $query = $this->db->get('tbl_user');
         return $query->result_array();
      }

      $query = $this->db->get_where('tbl_user', array('user_id' => $id));
      return $query->row_array();
   }

}

?>
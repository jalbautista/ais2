<?php

class Members_model extends CI_Model {

   public function __construct() {
      $this->load->database();
   }

   public function get_member($member_id = FALSE) {
      //enable profiling
      /*
      $this->output->enable_profiler(TRUE);
      $sections = array(
          'queries' => TRUE
      );
      $this->output->set_profiler_sections($sections);
       **/
      
      if ($member_id === FALSE) {
         $this->db->select("m.member_id as member_id, COALESCE(u.username,'---') as username, m.last_name as last_name, 
         m.first_name as first_name, m.middle_name as middle_name, m.position as position, 
         m.is_active as is_active", FALSE);
         $this->db->from('tbl_member as m');
         $this->db->join('tbl_user as u', 'u.tbl_member_id = m.member_id', 'left');
         $query = $this->db->get();
         return $query->result_array();
      }

      $query = $this->db->get_where('tbl_member', array('member_id' => $member_id));
      return $query->row_array();
   }

   public function add_member() {
      //$this->load->helper('url');
      //$slug = url_title($this->input->post('title'), 'dash', TRUE);

      $data = array(
          'last_name' => $this->input->post('last_name'),
          'first_name' => $this->input->post('first_name'),
          'middle_name' => $this->input->post('middle_name'),
          'birthday' => date("Y-m-d", strtotime($this->input->post('birthday'))),
          'position' => $this->input->post('position'),
          'address' => $this->input->post('address'),
          'membership_date' => $this->input->post('membership_date'),
          'is_active' => $this->input->post('is_active')
      );

      //$this->db->where('member_id', $this->input->post('member_id'));
      if ($this->input->post('member_id')) {
         return $this->db->update('tbl_member', $data, array('member_id' => $this->input->post('member_id')));
      } else {
         return $this->db->insert('tbl_member', $data);
      }
   }

}

?>
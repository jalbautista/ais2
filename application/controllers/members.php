<?php

class Members extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->model('members_model');
   }

   public function index() {
      $data['members'] = $this->members_model->get_member();
      $data['title'] = 'Members';

      $this->load->view('templates/header', $data);
      $this->load->view('members/index', $data);
      $this->load->view('templates/footer');
   }

   public function view($member_id) {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['members_item'] = $this->members_model->get_member($member_id);

      if (empty($data['members_item'])) {
         show_404();
      }

      $data['title'] = $data['members_item']['last_name'];

      $this->load->view('templates/header', $data);
      $this->load->view('members/view', $data);
      $this->load->view('templates/footer');
   }

   public function add() {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = 'Add Member';

      $this->form_validation->set_rules('last_name', 'Last Name', 'required');
      $this->form_validation->set_rules('first_name', 'First Name', 'required');
      $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
      $this->form_validation->set_rules('position', 'Position', 'required');

      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('members/add');
         $this->load->view('templates/footer');
      } else {
         $this->members_model->add_member();
         $this->load->view('members/success');
      }
   }
 
}

?>
<?php

class User extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->model('user_model');
   }

   public function index() {
      $data['users'] = $this->user_model->get_users();
      $data['title'] = 'Page Title';

      $this->load->view('templates/header', $data);
      $this->load->view('user/index', $data);
      $this->load->view('templates/footer');
   }

   public function view($id) {
      $data['object'] = $this->news_model->get_objects($id);

      if (empty($data['object'])) {
         show_404();
      }

      $data['title'] = $data['object']['title'];

      $this->load->view('templates/header', $data);
      $this->load->view('object/view', $data);
      $this->load->view('templates/footer');
   }

}

?>
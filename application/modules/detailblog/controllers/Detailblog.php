
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detailblog extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    // $this->load->model('auth/auth_model', 'authModel');
    $this->load->model('utravel/utravel_model', 'utravelModel');
    $this->load->model('detailblog/detailblog_model', 'blogModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function blogdetail($id){
    $data['title'] = 'Detail Blog';
    $data['blog'] = $this->utravelModel->getDataBlogByID($id)->row_array();
    $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();

    // $email = $this->session->userdata('email');
    // $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();

    $this->load->view('templates/templateutravel/header_menu', $data);
    $this->load->view('detailblog/detailblog', $data);
    $this->load->view('templates/templateutravel/footer_menu');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    // $this->load->model('auth/auth_model', 'authModel');
    $this->load->model('utravel/utravel_model', 'utravelModel');
    $this->load->model('about/about_model', 'aboutModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'About Utravel';
    $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $data['abput'] = $this->utravelModel->getDataWisata()->result_array();
    // $data['data_blogpost'] = $this->utravelModel->getDataBlogPost()->result_array();
    // $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $email = $this->session->userdata('email');
    // $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();

    $this->load->view('templates/templateutravel/header_menu', $data);
    $this->load->view('about/about', $data);
    $this->load->view('templates/templateutravel/footer_menu');
  }
}
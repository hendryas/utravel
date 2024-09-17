<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BudgetWisata extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    // $this->load->model('auth/auth_model', 'authModel');
    $this->load->model('utravel/utravel_model', 'utravelModel');
    $this->load->model('about/about_model', 'aboutModel');
    $this->load->model('budgetwisata/BudgetWisata_model', 'budgetwisataModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Budget Wisata';
    $budget_wisata = $this->input->post('budget_wisata');
    $angka_tanpa_titik = str_replace(".", "", $budget_wisata);
    $budget = (int)$angka_tanpa_titik;
    $lokasi_wisata = $this->input->post('lokasi_wisata');

    $data['data_pencarian'] = $this->budgetwisataModel->getDataPencarian($budget, $lokasi_wisata)->result_array();
    $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $data['abput'] = $this->utravelModel->getDataWisata()->result_array();
    // $data['data_blogpost'] = $this->utravelModel->getDataBlogPost()->result_array();
    // $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $email = $this->session->userdata('email');
    // $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();

    $this->load->view('templates/templateutravel/header_menu', $data);
    $this->load->view('budgetwisata/budgetwisata', $data);
    $this->load->view('templates/templateutravel/footer_menu');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utravel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    // $this->load->model('auth/auth_model', 'authModel');
    $this->load->model('utravel/utravel_model', 'utravelModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Wellcome to Utravel';
    $data['data_wisata'] = $this->utravelModel->getDataWisata()->result_array();
    $data['data_blogpost'] = $this->utravelModel->getDataBlogPost()->result_array();
    $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $email = $this->session->userdata('email');
    // $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();

    $this->load->view('templates/templateutravel/header_menu', $data);
    $this->load->view('utravel/utravel', $data);
    $this->load->view('templates/templateutravel/footer_menu');
  }

  public function detailwisata($id)
  {
    $data['title'] = 'Detail Wisata';
    $data['wisata'] = $this->utravelModel->getDataWisataByID($id)->row_array();
    $data['data_wisata'] = $this->utravelModel->getDataWisataRand()->result_array();
    $id_wisata = $data['wisata']['id_wisata'];

    $data['image_detail'] = $this->utravelModel->getDataImageWIsata($id_wisata)->result_array();

    $data['jml_ulasan_wisata'] = $this->utravelModel->getDataUlasanWisataByID($id)->result_array();
    $data['data_blogpost_footer'] = $this->utravelModel->getDataBlogPostFooter()->result_array();
    // $email = $this->session->userdata('email');
    // $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();

    $this->load->view('templates/templateutravel/header_menu', $data);
    $this->load->view('utravel/wisata_detail', $data);
    $this->load->view('templates/templateutravel/footer_menu');
  }
}

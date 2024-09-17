<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PostCommentWisata extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('auth/auth_model', 'authModel');
    $this->load->model('postcommentwisata/PostCommentWisata_model', 'commentWisataModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function postComment()
  {
    $id_wisata = $this->input->post('id_wisata');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $rating = $this->input->post('rating');
    $komen = $this->input->post('komen');

    $data_customer = [
      'nama_customer' => $nama,
      'email_customer' => $email,
      'delete_sts' => 0,
      'created_date' => date('Y-m-d H:i:s')
    ];

    $insertDataCustomer = $this->commentWisataModel->insertDataCustomer($data_customer);

    $dataCustomer = $this->commentWisataModel->getDataCustomer()->row_array();
    $id_customer = $dataCustomer['id_customer'];

    $data_komen_wisata = [
      'id_wisata' => $id_wisata,
      'id_customer' => $id_customer,
      'bintang_wisata' => $rating,
      'ulasan_wisata' => $komen,
      'delete_sts' => 0,
      'created_date' => date('Y-m-d H:i:s')
    ];

    $insertDataStarWisata = $this->commentWisataModel->insertDataKomen($data_komen_wisata);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Berhasil menambahkan komentar!</strong></div>');
    redirect('utravel/detailwisata/' . $id_wisata);
  }
}

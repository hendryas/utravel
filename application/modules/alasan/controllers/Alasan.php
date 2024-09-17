<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alasan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('Alasan_model', 'alasanModel');
    $this->load->model('peserta/PesertaModels');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Halaman Alasan Peserta';
    $email = $this->session->userdata('email');
    $data['user'] = $this->PesertaModels->getDataUser($email)->row_array();
    $id_user =  $data['user']['id'];
    $data['data_peserta'] = $this->alasanModel->getDataPeserta($id_user)->result_array();
    $data['data_alasan'] = $this->alasanModel->getDataAlasan()->result_array();

    $data['peserta_alasan'] = $this->alasanModel->getDataPesertaAlasan($id_user)->row_array();

    $this->load->view('templates/templatecustomer/main_header', $data);
    $this->load->view('templates/loaders/loader');
    $this->load->view('templates/templatecustomer/header_menu', $data);
    $this->load->view('templates/templatecustomer/navbar_menu', $data);
    $this->load->view('alasan/alasan', $data);
    $this->load->view('templates/templatecustomer/main_footer');
  }

  public function add()
  {
    $id_peserta = $this->input->post('nama_peserta');
    $alasan = $this->input->post('alasan');
    $tanggal_alasan = $this->input->post('tanggal_alasan');

    $data = [
      'id_peserta' => $id_peserta,
      'alasan' => $alasan,
      'tanggal' => $tanggal_alasan,
    ];

    $this->alasanModel->insertDataAlasan($data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Alasan baru telah ditambahkan!</strong></div>');
    redirect('alasan');
  }

  public function edit()
  {
    $id_alasan = $this->input->post('id_alasan');
    $id_peserta = $this->input->post('nama_peserta');
    $alasan = $this->input->post('alasan');
    $tanggal_alasan = $this->input->post('tanggal_alasan');

    $data = [
      'id_peserta' => $id_peserta,
      'alasan' => $alasan,
      'tanggal' => $tanggal_alasan,
    ];

    $this->alasanModel->updateDataAlasan($id_alasan, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Edit alasan telah ditambahkan!</strong></div>');
    redirect('alasan');
  }

  public function delete($id)
  {
    $id = decrypt_url($id);
    $this->alasanModel->deleteDataAlasan($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data alasan telah dihapus!</strong></div>');
    redirect('alasan');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterWisata extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('masterwisata/masterwisata_model', 'wisataModel');
    $this->load->model('auth/auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Data Wisata';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['data_wisata'] = $this->wisataModel->getDataWisata()->result_array();

    $this->load->view('templates/templatecustomer/main_header', $data);
    $this->load->view('templates/loaders/loader');
    $this->load->view('templates/templatecustomer/header_menu', $data);
    $this->load->view('templates/templatecustomer/navbar_menu', $data);
    $this->load->view('masterwisata/masterwisata', $data);
    $this->load->view('templates/templatecustomer/main_footer');
  }

  public function add()
  {
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $nama_user = $data['user']['name'];

    $nama_wisata = $this->input->post('nama_wisata');
    $singkatan_wisata = $this->input->post('singkatan_wisata');
    $lokasi_wisata = $this->input->post('lokasi_wisata');
    $alamat_wisata = $this->input->post('alamat_wisata');
    $harga_tiket = $this->input->post('harga_tiket');
    $link_lokasi_wisata = $this->input->post('link_lokasi_wisata');
    $souvenir_wisata = $this->input->post('souvenir_wisata');
    $tempat_makan = $_POST['tempat_makan'];
    $gambar_wisata =  $_FILES['gambar_wisata']['name'];
    // Get Gambar Details
    $gambar_wisata_detail1 =  $_FILES['gambar_wisata_detail1']['name'];
    $gambar_wisata_detail2 =  $_FILES['gambar_wisata_detail2']['name'];
    $gambar_wisata_detail3 =  $_FILES['gambar_wisata_detail3']['name'];

    $keterangan_wisata = $this->input->post('keterangan_wisata');
    // $gambar_wisata_detail =  $_FILES['gambar_wisata_detail']['name'];

    $his    = date("His");
    $thbl   = date("Ymd");

    // $data = [
    //   'nama_wisata' => $nama_wisata,
    //   'singkatan_wisata' => $singkatan_wisata,
    //   'lokasi_wisata' => $lokasi_wisata,
    //   'alamat_wisata' => $alamat_wisata,
    //   'harga_tiket' => $harga_tiket,
    //   'link_lokasi_wisata' => $link_lokasi_wisata,
    //   'souvenir_wisata' => $souvenir_wisata,
    //   'tempat_makan' => $tempat_makan,
    //   'gambar_wisata' => $gambar_wisata,
    //   'gambar_wisata_detail' => $gambar_wisata_detail,
    //   'nama_user' => $nama_user,
    // ];

    // var_dump($data);
    // die;

    $dname_gambar_wisata_detail1 = explode(".", $_FILES['gambar_wisata_detail1']['name']);
    $ext_gambar_wisata_detail1 = end($dname_gambar_wisata_detail1);
    $new_image_gambar_wisata_detail1 = $_FILES['gambar_wisata_detail1']['name'] = strtolower('gambar_wisata_detail1' . '_' . $thbl . '-' . $his . '.' . $ext_gambar_wisata_detail1);

    $dname_gambar_wisata_detail2 = explode(".", $_FILES['gambar_wisata_detail2']['name']);
    $ext_gambar_wisata_detail2 = end($dname_gambar_wisata_detail2);
    $new_image_gambar_wisata_detail2 = $_FILES['gambar_wisata_detail2']['name'] = strtolower('gambar_wisata_detail2' . '_' . $thbl . '-' . $his . '.' . $ext_gambar_wisata_detail2);

    $dname_gambar_wisata_detail3 = explode(".", $_FILES['gambar_wisata_detail3']['name']);
    $ext_gambar_wisata_detail3 = end($dname_gambar_wisata_detail3);
    $new_image_gambar_wisata_detail3 = $_FILES['gambar_wisata_detail3']['name'] = strtolower('gambar_wisata_detail3' . '_' . $thbl . '-' . $his . '.' . $ext_gambar_wisata_detail3);

    // $dname = explode(".", $_FILES['gambar_wisata_detail']['name']);
    // $ext = end($dname);
    // $new_image2 = $_FILES['gambar_wisata_detail']['name'] = strtolower('gambar_wisata_detail' . '_' . $thbl . '-' . $his . '.' . $ext);

    // var_dump($gambar_wisata != null);
    // var_dump($gambar_wisata_detail != null);
    // die;

    $dname = explode(".", $_FILES['gambar_wisata']['name']);
    $ext = end($dname);
    $new_image = $_FILES['gambar_wisata']['name'] = strtolower('gambar_wisata' . '_' . $thbl . '-' . $his . '.' . $ext);

    if ($gambar_wisata != null) {
      $file_name1 = 'gambar_wisata' . '_' . $thbl . '-' . $his;
      $config1['upload_path']          = './assets/images/img_wisata/';
      // $config1['allowed_types']        = 'doc|docx|pdf';
      $config1['allowed_types']        = 'jpg|png|jpeg';
      $config1['max_size']             = 3023;
      $config1['remove_space']         = TRUE;
      $config1['file_name']            = $file_name1;

      $this->load->library('upload', $config1);

      if ($this->upload->do_upload('gambar_wisata')) {
        $this->upload->data();

        $data = [
          'nama_wisata' => $nama_wisata,
          'singkatan_wisata' => $singkatan_wisata,
          'lokasi_wisata' => $lokasi_wisata,
          'alamat_wisata' => $alamat_wisata,
          'keterangan_wisata' =>  $keterangan_wisata,
          'harga_tiket' => $harga_tiket,
          'link_lokasi_wisata' => $link_lokasi_wisata,
          'souvenir_wisata' => $souvenir_wisata,
          'tempat_makan' => $tempat_makan,
          'gambar_wisata' => $new_image,
          'gambar_wisata_detail' => $new_image2,
          'delete_sts' => 0,
          'created_date' => date('Y-m-d H:i:s'),
          'created_user' => $nama_user,
        ];

        $qryInsert = $this->wisataModel->insertDataWisata($data);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Gagal Insert Gambar WIsata!</strong></div>');
        redirect('masterwisata');
      }
    }

    $getDataWisata = $this->wisataModel->getDataWisataDesc()->row_array();
    $id_wisata = $getDataWisata['id_wisata'];

    if ($id_wisata != null) {
      // Cek Gambar Detail
      if ($gambar_wisata_detail1 != null) {
        // $file_name_gambar_wisata_detail1 = 'gambar_wisata_detail1' . '_' . $thbl . '-' . $his;
        // $config1_name_gambar_wisata_detail1['upload_path']          = './assets/images/img_wisata/image_detail/';
        // // $config1_name_gambar_wisata_detail1['allowed_types']        = 'doc|docx|pdf';
        // $config1_name_gambar_wisata_detail1['allowed_types']        = 'jpg|png|jpeg';
        // $config1_name_gambar_wisata_detail1['max_size']             = 3023;
        // $config1_name_gambar_wisata_detail1['remove_space']         = TRUE;
        // $config1_name_gambar_wisata_detail1['file_name']            = $file_name_gambar_wisata_detail1;

        $targetDir = "assets/images/img_wisata/image_detail/";
        $targetFile = $targetDir . $new_image_gambar_wisata_detail1;

        move_uploaded_file($_FILES['gambar_wisata_detail1']['tmp_name'], $targetFile);

        $data = [
          'id_wisata' => $id_wisata,
          'image_detail' => $new_image_gambar_wisata_detail1,
          'delete_sts' => 0,
          'created_date' => date('Y-m-d H:i:s'),
          'created_user' => $nama_user,
        ];

        $qryInsert = $this->wisataModel->insertDataImageDetail($data);

        // $this->load->library('upload', $config1_name_gambar_wisata_detail1);

        // if ($this->upload->do_upload('gambar_wisata_detail1')) {
        //   $this->upload->data();

        //   $data = [
        //     'id_wisata' => $id_wisata,
        //     'image_detail' => $new_image_gambar_wisata_detail1,
        //     'delete_sts' => 0,
        //     'created_date' => date('Y-m-d H:i:s'),
        //     'created_user' => $nama_user,
        //   ];

        //   $qryInsert = $this->wisataModel->insertDataImageDetail($data);
        // }
      }

      if ($gambar_wisata_detail2 != null) {
        // $file_name_gambar_wisata_detail2 = 'gambar_wisata_detail2' . '_' . $thbl . '-' . $his;
        // $config1_name_gambar_wisata_detail2['upload_path']          = './assets/images/img_wisata/image_detail/';
        // // $config1_name_gambar_wisata_detail2['allowed_types']        = 'doc|docx|pdf';
        // $config1_name_gambar_wisata_detail2['allowed_types']        = 'jpg|png|jpeg';
        // $config1_name_gambar_wisata_detail2['max_size']             = 3023;
        // $config1_name_gambar_wisata_detail2['remove_space']         = TRUE;
        // $config1_name_gambar_wisata_detail2['file_name']            = $file_name_gambar_wisata_detail2;

        $targetDir = "assets/images/img_wisata/image_detail/";
        $targetFile = $targetDir . $new_image_gambar_wisata_detail2;

        move_uploaded_file($_FILES['gambar_wisata_detail2']['tmp_name'], $targetFile);

        // $this->load->library('upload', $config1_name_gambar_wisata_detail2);

        // if ($this->upload->do_upload('gambar_wisata_detail2')) {
        //   $this->upload->data();

        $data = [
          'id_wisata' => $id_wisata,
          'image_detail' => $new_image_gambar_wisata_detail2,
          'delete_sts' => 0,
          'created_date' => date('Y-m-d H:i:s'),
          'created_user' => $nama_user,
        ];

        $qryInsert = $this->wisataModel->insertDataImageDetail($data);
        // }
      }

      if ($gambar_wisata_detail3 != null) {
        // $file_name_gambar_wisata_detail3 = 'gambar_wisata_detail2' . '_' . $thbl . '-' . $his;
        // $config1_name_gambar_wisata_detail3['upload_path']          = './assets/images/img_wisata/image_detail/';
        // // $config1_name_gambar_wisata_detail3['allowed_types']        = 'doc|docx|pdf';
        // $config1_name_gambar_wisata_detail3['allowed_types']        = 'jpg|png|jpeg';
        // $config1_name_gambar_wisata_detail3['max_size']             = 3023;
        // $config1_name_gambar_wisata_detail3['remove_space']         = TRUE;
        // $config1_name_gambar_wisata_detail3['file_name']            = $file_name_gambar_wisata_detail3;

        $targetDir = "assets/images/img_wisata/image_detail/";
        $targetFile = $targetDir . $new_image_gambar_wisata_detail3;

        move_uploaded_file($_FILES['gambar_wisata_detail3']['tmp_name'], $targetFile);

        // $this->load->library('upload', $config1_name_gambar_wisata_detail3);

        // if ($this->upload->do_upload('gambar_wisata_detail3')) {
        //   $this->upload->data();

        $data = [
          'id_wisata' => $id_wisata,
          'image_detail' => $new_image_gambar_wisata_detail3,
          'delete_sts' => 0,
          'created_date' => date('Y-m-d H:i:s'),
          'created_user' => $nama_user,
        ];

        $qryInsert = $this->wisataModel->insertDataImageDetail($data);
        // }
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>ID Wisata Tidak Ditemukan!</strong></div>');
      redirect('masterwisata');
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Insert Data Berhasil!</strong></div>');
    redirect('masterwisata');
  }

  public function edit()
  {
    $id = $this->input->post('id_wisata');
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $nama_user = $data['user']['name'];

    $nama_wisata = $this->input->post('nama_wisata');
    $singkatan_wisata = $this->input->post('singkatan_wisata');
    $lokasi_wisata = $this->input->post('lokasi_wisata');
    $alamat_wisata = $this->input->post('alamat_wisata');
    $harga_tiket = $this->input->post('harga_tiket');
    $link_lokasi_wisata = $this->input->post('link_lokasi_wisata');
    $souvenir_wisata = $this->input->post('souvenir_wisata');
    $tempat_makan = $_POST['tempat_makan'];
    $gambar_wisata =  $_FILES['gambar_wisata']['name'];
    $keterangan_wisata = $this->input->post('keterangan_wisata');

    $his    = date("His");
    $thbl   = date("Ymd");

    // $data = [
    //   'id_wisata' => $id,
    //   'nama_wisata' => $nama_wisata,
    //   'singkatan_wisata' => $singkatan_wisata,
    //   'lokasi_wisata' => $lokasi_wisata,
    //   'alamat_wisata' => $alamat_wisata,
    //   'harga_tiket' => $harga_tiket,
    //   'link_lokasi_wisata' => $link_lokasi_wisata,
    //   'souvenir_wisata' => $souvenir_wisata,
    //   'tempat_makan' => $tempat_makan,
    //   'gambar_wisata' => $gambar_wisata,
    //   'nama_user' => $nama_user,
    //   'keterangan_wisata' => $keterangan_wisata
    // ];

    // var_dump($gambar_wisata != null);
    // die;

    $dname = explode(".", $_FILES['gambar_wisata']['name']);
    $ext = end($dname);
    $new_image = $_FILES['gambar_wisata']['name'] = strtolower('gambar_wisata' . '_' . $thbl . '-' . $his . '.' . $ext);

    if ($gambar_wisata != null) {
      $file_name1 = 'gambar_wisata' . '_' . $thbl . '-' . $his;
      $config1['upload_path']          = './assets/images/img_wisata/';
      // $config1['allowed_types']        = 'doc|docx|pdf';
      $config1['allowed_types']        = 'jpg|png|jpeg';
      $config1['max_size']             = 3023;
      $config1['remove_space']         = TRUE;
      $config1['file_name']            = $file_name1;

      $this->load->library('upload', $config1);

      if ($this->upload->do_upload('gambar_wisata')) {
        $this->upload->data();

        $data = [
          'nama_wisata' => $nama_wisata,
          'singkatan_wisata' => $singkatan_wisata,
          'lokasi_wisata' => $lokasi_wisata,
          'alamat_wisata' => $alamat_wisata,
          'keterangan_wisata' =>  $keterangan_wisata,
          'harga_tiket' => $harga_tiket,
          'link_lokasi_wisata' => $link_lokasi_wisata,
          'souvenir_wisata' => $souvenir_wisata,
          'tempat_makan' => $tempat_makan,
          'gambar_wisata' => $new_image,
          'last_date' => date('Y-m-d H:i:s'),
          'last_user' => $nama_user,
        ];

        $qryInsert = $this->wisataModel->updateDataWisata($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Update Data Berhasil!</strong></div>');
        redirect('masterwisata');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Gagal Update Gambar WIsata!</strong></div>');
        redirect('masterwisata');
      }
    } else {
      $data = [
        'nama_wisata' => $nama_wisata,
        'singkatan_wisata' => $singkatan_wisata,
        'lokasi_wisata' => $lokasi_wisata,
        'alamat_wisata' => $alamat_wisata,
        'keterangan_wisata' =>  $keterangan_wisata,
        'harga_tiket' => $harga_tiket,
        'link_lokasi_wisata' => $link_lokasi_wisata,
        'souvenir_wisata' => $souvenir_wisata,
        'tempat_makan' => $tempat_makan,
        'last_date' => date('Y-m-d H:i:s'),
        'last_user' => $nama_user,
      ];

      $qryInsert = $this->wisataModel->updateDataWisata($id, $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
      <strong>Update Data Berhasil!</strong></div>');
      redirect('masterwisata');
    }
  }

  public function delete($id)
  {
    $id = decrypt_url($id);
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $nama_user = $data['user']['name'];

    $data = [
      'delete_sts' => 1,
      'removed_date' => date('Y-m-d H:i:s'),
      'removed_user' => $nama_user
    ];
    $this->wisataModel->deleteDataWisata($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data wisata telah dihapus!</strong></div>');
    redirect('masterwisata');
  }
}

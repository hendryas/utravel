<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterBlogPost extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('masterblogpost/masterblogpost_model', 'blogModel');
    $this->load->model('auth/auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Data Blog Post';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['data_blog_post'] = $this->blogModel->getDataBlogPost()->result_array();

    $this->load->view('templates/templatecustomer/main_header', $data);
    $this->load->view('templates/loaders/loader');
    $this->load->view('templates/templatecustomer/header_menu', $data);
    $this->load->view('templates/templatecustomer/navbar_menu', $data);
    $this->load->view('masterblogpost/masterblogpost', $data);
    $this->load->view('templates/templatecustomer/main_footer');
  }

  public function add()
  {
    $judul_post = $this->input->post('judul_post');
    $keterangan_post = $this->input->post('keterangan_post');
    $tanggal_post = $this->input->post('tanggal_post');
    $author_post = $this->input->post('author_post');
    $image_post = $_FILES['image_post']['name'];
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $nama_user = $data['user']['name'];

    $his    = date("His");
    $thbl   = date("Ymd");

    $dname = explode(".", $_FILES['image_post']['name']);
    $ext = end($dname);
    $new_image = $_FILES['image_post']['name'] = strtolower('image_post' . '_' . $thbl . '-' . $his . '.' . $ext);

    // $data = [
    //   'judul_post' => $judul_post,
    //   'keterangan_post' => $keterangan_post,
    //   'tanggal_post' => $tanggal_post,
    //   'author_post' => $author_post,
    //   'image_post' =>  $new_image,
    //   'delete_sts' => 0,
    //   'last_date' => date('Y-m-d H:i:s'),
    //   'last_user' => $nama_user,
    // ];

    if ($image_post != null) {
      $file_name1 = 'image_post' . '_' . $thbl . '-' . $his;
      $config1['upload_path']          = './assets/images/blog_post/';
      // $config1['allowed_types']        = 'doc|docx|pdf';
      $config1['allowed_types']        = 'jpg|png|jpeg';
      $config1['max_size']             = 3023;
      $config1['remove_space']         = TRUE;
      $config1['file_name']            = $file_name1;

      $this->load->library('upload', $config1);

      if ($this->upload->do_upload('image_post')) {
        $this->upload->data();

        $data = [
          'judul_post' => $judul_post,
          'keterangan_post' => $keterangan_post,
          'tanggal_post' => $tanggal_post,
          'author_post' => $author_post,
          'image_post' =>  $new_image,
          'delete_sts' => 0,
          'created_date' => date('Y-m-d H:i:s'),
          'created_user' => $nama_user,
        ];

        $qryInsert = $this->blogModel->insertDataBlog($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Insert Data Berhasil!</strong></div>');
        redirect('masterblogpost');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Gagal Insert Gambar WIsata!</strong></div>');
        redirect('masterblogpost');
      }
    }
  }

  public function edit()
  {
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $nama_user = $data['user']['name'];

    $id = $this->input->post('id_blog_post');
    $judul_post = $this->input->post('judul_post');
    $keterangan_post = $this->input->post('keterangan_post');
    $tanggal_post = $this->input->post('tanggal_post');
    $author_post = $this->input->post('author_post');
    $image_post = $_FILES['image_post']['name'];

    $his    = date("His");
    $thbl   = date("Ymd");

    $dname = explode(".", $_FILES['image_post']['name']);
    $ext = end($dname);
    $new_image = $_FILES['image_post']['name'] = strtolower('image_post' . '_' . $thbl . '-' . $his . '.' . $ext);

    // $data = [
    //   'nama_user' => $nama_user,
    //   'id' => $id,
    //   'judul_post' => $judul_post,
    //   'keterangan_post' => $keterangan_post,
    //   'tanggal_post' => $tanggal_post,
    //   'author_post' => $author_post,
    //   'image_post' => $image_post,
    // ];

    if ($image_post != null) {
      $file_name1 = 'image_post' . '_' . $thbl . '-' . $his;
      $config1['upload_path']          = './assets/images/blog_post/';
      // $config1['allowed_types']        = 'doc|docx|pdf';
      $config1['allowed_types']        = 'jpg|png|jpeg';
      $config1['max_size']             = 3023;
      $config1['remove_space']         = TRUE;
      $config1['file_name']            = $file_name1;

      $this->load->library('upload', $config1);

      if ($this->upload->do_upload('image_post')) {
        $this->upload->data();

        $data = [
          'judul_post' => $judul_post,
          'keterangan_post' => $keterangan_post,
          'tanggal_post' => $tanggal_post,
          'author_post' => $author_post,
          'image_post' =>  $new_image,
          'delete_sts' => 0,
          'last_date' => date('Y-m-d H:i:s'),
          'last_user' => $nama_user,
        ];

        $qryInsert = $this->blogModel->updateDataBlog($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Update Data Berhasil!</strong></div>');
        redirect('masterblogpost');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Gagal Insert Gambar WIsata!</strong></div>');
        redirect('masterblogpost');
      }
    } else {
      $data = [
        'judul_post' => $judul_post,
        'keterangan_post' => $keterangan_post,
        'tanggal_post' => $tanggal_post,
        'author_post' => $author_post,
        'delete_sts' => 0,
        'last_date' => date('Y-m-d H:i:s'),
        'last_user' => $nama_user,
      ];

      $qryInsert = $this->blogModel->updateDataBlog($id, $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Update Data Berhasil!</strong></div>');
      redirect('masterblogpost');
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
    $this->blogModel->deleteDataBlog($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data blog post telah dihapus!</strong></div>');
    redirect('masterblogpost');
  }
}

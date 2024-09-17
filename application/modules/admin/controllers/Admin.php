<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //jika tidak ada session,lempar ke auth
        is_logged_in();
        $this->load->model('admin/admin_model', 'adminModel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $email = $this->session->userdata('email');
        $data['user'] = $this->adminModel->getDataUser($email)->row_array();
        $data['jumlah_wisata'] = $this->db->get('wisata')->result();
        $data['jumlah_customer'] = $this->db->get('customer')->result();
        // $data['count'] = $this->adminModel->count()->row_array();
        // $data['layak'] = $this->adminModel->count_layak()->row_array();
        // $data['tidaklayak'] = $this->adminModel->count_tidaklayak()->row_array();
        // $data['miliksendiri'] = $this->adminModel->count_miliksendiri()->row_array();
        // $data['sewa'] = $this->adminModel->count_sewa()->row_array();
        // $data['batupermanen'] = $this->adminModel->count_batupermanen()->row_array();
        // $data['papan'] = $this->adminModel->count_papan()->row_array();
        // $data['bambuanyam'] = $this->adminModel->count_bambuanyam()->row_array();
        // $data['pkh'] = $this->adminModel->count_pkh()->row_array();
        // $data['nonpkh'] = $this->adminModel->count_nonpkh()->row_array();

        // var_dump($data['batupermanen']);
        // die;
        $this->load->view('templates/templateadmin/main_header', $data);
        $this->load->view('templates/loaders/loader');
        $this->load->view('templates/templateadmin/header_menu', $data);
        $this->load->view('templates/templateadmin/navbar_menu', $data);
        $this->load->view('admin/dashboardpage/view_index', $data);
        $this->load->view('templates/templateadmin/main_footer');
    }

    public function user()
    {
        $data['title'] = 'User Management';
        $email = $this->session->userdata('email');
        $data['user'] = $this->adminModel->getDataUser($email)->row_array();

        $data['peserta'] = $this->adminModel->getUser()->result_array();
        $data['role'] = $this->adminModel->getRole()->result_array();

        $this->load->view('templates/templateadmin/main_header', $data);
        $this->load->view('templates/loaders/loader');
        $this->load->view('templates/templateadmin/header_menu', $data);
        $this->load->view('templates/templateadmin/navbar_menu', $data);
        $this->load->view('admin/usermanagementpage/view_user', $data);
        $this->load->view('templates/templateadmin/main_footer');
    }

    public function editpeserta()
    {
        $email = $this->input->post('email');
        $nama_peserta = $this->input->post('name');
        $role_id = $this->input->post('role_id');
        $id_peserta = $this->input->post('id_peserta');

        $data = [
            'name' => $nama_peserta,
            'email' => $email,
            'role_id' => $role_id,
        ];

        $this->adminModel->updatePeserta($id_peserta, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>User berhasil di perbaharui!</strong></div>');
        redirect('admin/user');
    }

    public function deletepeserta($id)
    {
        $this->adminModel->deleteDataPeserta($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data user telah dihapus!</strong></div>');
        redirect('admin/user');
    }

    public function adduser()
    {
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');

        $data = [
            'name' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'gender' => $gender,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id,
            'is_active' => $is_active,
            'date_created' =>  date('Y-m-d H:i:s'),
        ];

        $this->adminModel->insertDataUser($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Tambah Data user telah dihapus!</strong></div>');
        redirect('admin/user');
    }
}

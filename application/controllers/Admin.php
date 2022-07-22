<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Reservasi_model');
    }

    public function index()
    {
        $data['admin'] = $this->User_model->getAdmin();
        $data['reservasi'] = $this->Reservasi_model->get();
        $this->load->view('admin/vw_admin', $data);
    }

    public function admin_tambah_reservasi()
    {
        $this->load->view('admin/admin_tambah_reservasi');
    }

    public function admin_customer()
    {
        $data['customer'] = $this->User_model->getCustomer();
        $data['admin'] = $this->User_model->getAdmin();
        $this->load->view('admin/admin_customer', $data);
    }

    public function admin_tambah_customer()
    {
        $this->load->view('admin/admin_tambah_customer');
    }

    public function admin_cashier()
    {
        $data['cashier'] = $this->User_model->getCashier();
        $data['admin'] = $this->User_model->getAdmin();
        $this->load->view('admin/admin_cashier', $data);
    }

    public function admin_tambah_cashier()
    {
        $this->load->view('admin/admin_tambah_cashier');
    }

    public function hapus($id)
    {
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Data User Berhasil Dihapus!</div>');
        redirect('admin/admin_customer');
    }

    function edit()
    {
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'password' => $this->input->post('password'),
            'foto_profil' => $this->input->post('foto_profil'),
            'role' => "Customer"
        ];

        $id = $this->input->post('id_user');
        $this->User_model->update(['id_user' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil DiUbah!</div>');
        redirect('admin/admin_customer');
    }

    function edit2()
    {
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'password' => $this->input->post('password'),
            'foto_profil' => $this->input->post('foto_profil'),
            'role' => "Cashier"
        ];

        $id = $this->input->post('id_user');
        $this->User_model->update(['id_user' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil DiUbah!</div>');
        redirect('admin/admin_cashier');
    }

    function ubah_customer($id){
        $data['customer'] = $this->User_model->getById($id);
        $this->load->view('admin/admin_ubah_customer', $data);
    }

    function ubah_cashier($id){
        $data['cashier'] = $this->User_model->getById($id);
        $this->load->view('admin/admin_ubah_cashier', $data);
    }
}

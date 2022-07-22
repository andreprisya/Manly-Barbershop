<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Customer');
        } else{
            $this->cek_login();
        }
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->userrole->get();
        $status_u = false;
        $index = -1;

        for ($i=0; $i < count($user) ; $i++) { 
            if($username == $user[$i]['username']){
                $status_u = true;
                $index = $i;
                break;
            }
        }

        if ($status_u == true) {
            if ($password == $user[$index]['password']) {
                $data = [
                    'username' => $user[$index]['username'],
                    'role' => $user[$index]['role'],
                    'id_user' => $user[$index]['id_user'],
                ];
                $this->session->set_userdata($data);
                if ($user[$index]['role'] == 'Admin') {
                    redirect('admin');
                } elseif ($user[$index]['role'] == 'Cashier') {
                    redirect('kasir');
                } else {
                    redirect('customer');
                }
            } else {
                $this->session->set_flashdata('message' , '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('Welcome/login');
            }
        } else {
            $this->session->set_flashdata('message' , '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar!</div>');
            redirect('Welcome/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Welcome/login');
    }

    public function cek_regis()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'password' => htmlspecialchars($this->input->post('password1', true)),
            'foto_profil' => htmlspecialchars($this->input->post('foto_profil', true)),
            'role' => "Customer"
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Selamat Akunmu sudah berhasil terdaftar, silahkan login!</div>
        ');
        redirect('Welcome/login');
    }

    public function cek_regis2()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'foto_profil' => htmlspecialchars($this->input->post('foto_profil', true)),
            'role' => "Customer"
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Selamat Akunmu sudah berhasil terdaftar, silahkan login!</div>
        ');
        redirect('Admin/admin_customer');
    }

    public function cek_regis3()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'foto_profil' => htmlspecialchars($this->input->post('foto_profil', true)),
            'role' => "Cashier"
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Selamat Akunmu sudah berhasil terdaftar, silahkan login!</div>
        ');
        redirect('Admin/admin_cashier');
    }
}
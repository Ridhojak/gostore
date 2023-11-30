<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_registrasi');
        $this->load->model('m_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'nama_pelanggan',
            'Nama Pelanggan',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[tb_pelanggan.email]',
            array('required' => '%s Keterangan Harus diisi !!', 'is_unique' => '%s Email ini Sudah Terdaftar !!')
        );
        $this->form_validation->set_rules(
            'password',
            'password',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'ulangi_password',
            'Ulangi password',
            'required|matches[password]',
            array('required' => '%s Keterangan Harus diisi !!', 'matches' => '%s Password Harus sama !!')
        );
        $this->form_validation->set_rules(
            'telepon',
            'Telepon',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Registrasi',
                //'pelanggan' => $this->m_pelanggan->total_barang(),
                //'total_kategori' => $this->m_pelanggan->total_kategori(),
                'isi' => 'registrasi',
            );
            $this->load->view('registrasi', $data, FALSE);
        } else {
            $data = array(
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->m_registrasi->tambah($data);
            $this->session->set_flashdata('pesan', 'pendaftaran Berhasil yah Silakan Login Bossku');
            redirect('registrasi');
        }

    }
    public function login()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => '%s email Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s Password Harus diisi !!')
        );

        if ($this->form_validation->run() == TRUE or FALSE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->login->login($email, $password);
        }
        $data = array(
            'title' => 'Login',
            //'pelanggan' => $this->m_pelanggan->total_barang(),
            //'total_kategori' => $this->m_pelanggan->total_kategori(),
            'isi' => 'login',
        );
        $this->load->view('login', $data, FALSE);
    }
    public function logout()
    {
        $this->login->logout();
    }
}
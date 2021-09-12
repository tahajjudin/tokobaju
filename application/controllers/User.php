<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('usermodel');
        $data['produk'] = $this->usermodel->getProduk();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_navbar');
        $this->load->view('user/index',$data);
        $this->load->view('templates/user_footer');
    }

}

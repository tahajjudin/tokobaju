<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function index()
	{
		$this->load->view('member/index.php');
	}

	public function register(){
		//$this->load->view();
		$this->load->view('member/register/index.php');
	}

	public function editprofile(){
		$this->load->view('member/register/editprofile');
	}
	public function checkout(){
		$this->load->view('member/register/checkout.php');
	}
	public function payconfirm(){
		$this->load->view('member/register/payconfirm.php');
	}

}

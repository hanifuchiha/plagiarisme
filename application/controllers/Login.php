<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('login/index');
	}
	public function input()
	{
		$this->load->view('html/register');
	}

	public function add()
	{
		$product = $this->login_model;



		$product->save();


		redirect('login/index');
	}

	public function ceklogin()
	{
		$user = htmlspecialchars($this->input->post('username'));
		$password = $this->input->post('password');
		$where = array(

			'username' => $user,
			'password' => md5($password)
		);
		$cek = $this->login_model->cek_login('admin', $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(

				'username' => $user,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(site_url('admin/index'));
		} else {
?>
			<script type="text/javascript">
				alert('Email dan Password Salah');
				window.location = history.go(-1);
			</script>
<?php

		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

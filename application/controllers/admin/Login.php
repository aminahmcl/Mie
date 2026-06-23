<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Halaman Login';

		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/login', $data);
		$this->load->view('admin/templates/admin_footer');
	}

	public function proses_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$tbl_user = $this->db->get_where('tbl_user', [
			'email' => $email
		])->row_array();

	
		if ($tbl_user) {

			
			if (password_verify($password, $tbl_user['password'])) {

				// session login admin
				$data = [
					'email' => $tbl_user['email'],
					'role'  => 'admin'
				];

				$this->session->set_userdata($data);

			
				redirect('menu/admin');

			} else {

				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger">
						Password Salah!
					</div>'
				);

				redirect('admin/login');
			}

		} else {

			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger">
					Email Belum Terdaftar!
				</div>'
			);

			redirect('admin/login');
		}
	}

	public function logout()
	{
		// hapus session
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success">
				Berhasil Logout!
			</div>'
		);

		redirect('admin/login');
	}
}
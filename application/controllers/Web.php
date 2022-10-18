<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_form_input_data');
	}

	public function dataSiswa()
	{
		$data = [
			'nama' 			=> $this->input->post('nama'),
			'nis' 			=> $this->input->post('nis'),
			'kelas' 		=> $this->input->post('kelas'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
			'alamat' 		=> $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' 	=> $this->input->post('agama')
		];

		$this->load->view('v_tampil_data', $data);
	}
}

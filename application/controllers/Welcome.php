<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('rest_helper');
	}

	public function index(){

		$data['dados'] =  json_decode(listarDados());

		$this->load->view('home', $data);

	}

	public function insertDados(){

		$nome = $this->input->post('nome');
		$idade = $this->input->post('idade');
		$cargo = $this->input->post('cargo');

		inserirDados($nome, $idade, $cargo);
		
		redirect("welcome/index");

	}
}

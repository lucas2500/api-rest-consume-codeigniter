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

	public function editarUser($ID=NULL){

		if($ID == NULL){

			redirect("welcome/index");
		}

		$data['dados'] = json_decode(alterarDados($ID));

		$this->load->view('editarReg', $data);

	}

	public function editarRegistro(){

		$nome = $this->input->post('nome');
		$idade = $this->input->post('idade');
		$cargo = $this->input->post('cargo');
		$ID = $this->input->post('ID');

		updateDados($nome, $idade, $cargo, $ID);

		redirect("welcome/index");

	}
}

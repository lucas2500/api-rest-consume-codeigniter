<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('rest_helper');
		$this->load->library('session');
	}

	public function index(){

		$data['msg'] = $this->session->flashdata('msg');

		$data['dados'] =  json_decode(listarDados());

		$this->load->view('home', $data);

	}

	public function insertDados(){

		$nome = $this->input->post('nome');
		$idade = $this->input->post('idade');
		$cargo = $this->input->post('cargo');

		inserirDados($nome, $idade, $cargo);

		$this->session->set_flashdata('msg', 'Funcionário cadastrado com sucesso!!');
		
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

		$this->session->set_flashdata('msg', 'Registro atualizado com sucesso!!');

		redirect("welcome/index");

	}

	public function deletar($ID=NULL){

		if($ID == NULL){

			redirect("welcome/index");
		}

		deletarDados($ID);

		$this->session->set_flashdata('msg', 'Funcionário deletado com sucesso!!');

		redirect("welcome/index");

	}
}

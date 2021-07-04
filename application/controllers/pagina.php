<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	
	public function index() {
		$dados['titulo'] = 'Emerson Braga - Sobre';
		$this->load->view('home', $dados);
	}

	public function projetos() {
		$dados['titulo'] = 'Emerson Braga - Projetos';
		$this->load->view('projetos', $dados);
	}

	public function preferencias() {
		$dados['titulo'] = 'Emerson Braga - Preferências';
		$this->load->view('preferencias', $dados);
	}

	public function contato() {
		$this->load->helper('form');
		$dados['titulo'] = 'Emerson Braga - Contato';
		$this->load->view('contato', $dados);
	}


}

<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'OUTLET COMPROU GANHOU';
		$data['description'] = 'O maior Outlet de imóveis com beneficios imperdíveis.';
		$data['keywords'] = 'apartamento desconto, apartamento com desconto, outlet imoveis, apartamento barato, imoveis a venda, imoveis com desconto, comprou ganhou';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/home.php */
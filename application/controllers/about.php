<?php

/**
* 
*/
class About extends CI_Controller
{
	
	public function index($titulo = 'LaNube')
	{
		$data = array(
			'titulo' => 'LaNube',
			'subtitulo' => 'Acerca de...',
			'usuario' => 'usuario');
		$this->load->view('templates/head');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('about/content');
		$this->load->view('templates/footer');
	}
}
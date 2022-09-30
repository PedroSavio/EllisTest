<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model("ServicosModels", "servicos");
		
		$servicosQuery = $this->servicos->Listar_servicos();

		$servicosList = array("servicos" => $servicosQuery);
		
		$this->load->view('home_footer', $servicosList);

        //echo 'Olá mundo';
	}
	
	public function listarTudo()
	{
		$this->load->model("ServicosModels", "servicos");
		
		$resultado = $this->servicos->Listar_servicos();

        echo '<pre>';
		var_dump($resultado);
	}
}

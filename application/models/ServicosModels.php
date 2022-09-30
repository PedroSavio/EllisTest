<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicosModels extends CI_Model {

	public function Listar_servicos()
	{
		$this->db->select("servico, status");
        $query = $this->db->get_where("servicos", array("status" => 1))->result();
        //$result = $this->db->where('status', 1);
        
        return $query;
        //echo 'Olá mundo';
	}
}

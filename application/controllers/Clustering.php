<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clustering extends CI_Controller {

    //index dasboard
	public function index()
	{
	    $data['title'] = "Inicio";
	    
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('index', $data);
        $this->load->view('footer');

	}

    // Definición de clustering
    public function que_es_clustering()
    {
        $data['title'] = "Definición de Clustering";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('que_es_clustering', $data);
        $this->load->view('footer');
    }

    //Tipos de clustering
    public function tipos_clustering()
    {
        $data['title'] = "Tipos de Clustering";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('tipos_clustering', $data);
        $this->load->view('footer');
    }
}

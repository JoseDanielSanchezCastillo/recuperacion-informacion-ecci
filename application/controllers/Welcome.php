<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function que_es_clustering()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('que_es');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function tipos_de_clustering()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('tipos');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function k_means()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('k_means');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function hac()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('hac');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function cod_k()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('cod_k');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function cod_hac()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('cod_hac');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
	public function acerca()
	{
		//$this->load->view('structure/header');
		$this->load->view('menu');
		$this->load->view('acerca');
		$this->load->view('footer');
		//$this->load->view('structure/footer');
	}
}

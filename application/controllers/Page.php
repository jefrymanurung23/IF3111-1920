<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index($halaman = 'home')
	{
        $this->load->view('template/header');
        $this->load->view('pages/'.$halaman);
        $this->load->view('template/footer');
	}
}
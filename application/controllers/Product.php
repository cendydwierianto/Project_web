<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->template('product');
	}
	public function details()
	{
		$id=$this->uri->segment(3);
		if ($id != NULL) {
			$x['product'] = $this->product_model->getProduct_details($id);
			$this->load->template('product', $x);
		}else {
			$this->load->template('product');
		}
	}
}

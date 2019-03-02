<?php  
	class Product extends CI_Controller{
		function __construct(){
			parent :: __construct();
			$this->load->model('m_product');
		}
		function index(){
			$data['product'] = $this->m_product->muncul_data()->result();
			$this->load->view('v_product',$data);
		}
	}
?>
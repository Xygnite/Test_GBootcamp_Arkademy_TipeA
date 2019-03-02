<?php  
	class Categories extends CI_Controller{
		function __construct(){
			parent :: __construct();
			$this->load->model('m_categories');
		}
		function index(){
			$data['category'] = $this->m_categories->muncul_data()->result();
			$this->load->view('v_categories',$data);
		}
	}
?>
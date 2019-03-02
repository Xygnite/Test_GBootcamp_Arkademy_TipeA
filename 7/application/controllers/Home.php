<?php  
	class Home extends CI_Controller{
		function __construct(){
			parent :: __construct();
			$this->load->model('m_home');
		}
		function index(){
			$data['gudang'] = $this->m_home->muncul_data()->result();
			$this->load->view('v_home',$data);
		}
	}
?>
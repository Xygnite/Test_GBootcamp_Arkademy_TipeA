<?php  
	class m_product extends CI_Model{
		
		function muncul_data(){
			return $this->db->query("SELECT * FROM products;");
		}
	}
?>
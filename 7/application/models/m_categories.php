<?php  
	class m_categories extends CI_Model{
		
		function muncul_data(){
			return $this->db->query("SELECT * FROM categories;");
		}
	}
?>
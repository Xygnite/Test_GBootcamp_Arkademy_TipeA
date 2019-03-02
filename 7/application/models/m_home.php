<?php  
	class m_home extends CI_Model{
		
		function muncul_data(){
			return $this->db->query("SELECT c.id, c.category_name, GROUP_CONCAT(p.name) as product_name FROM categories c INNER JOIN products p ON p.category_id = c.id GROUP BY c.id;");
		}
	}
?>
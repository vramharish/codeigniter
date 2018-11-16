

<?php 
   Class Auth_model extends CI_Model 
   	{
     
   function insert_db($data)
     {
        $this->db->insert("users", $data);
     }

	} 
?> 
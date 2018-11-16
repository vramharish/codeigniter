<?php  
  
class Delete_model extends CI_Model 
{  
    public function delete() 
    {  
        $a = $_SESSION['user_id'];
        $this->db->where('user_id', $a);
        $delete = $this->db->delete('users');
        if ($delete)
        {
         return true;
        }
        else
        {
            return false;
        }
    }
    // public function getuserdetails()
    //       {
    //           $this->db->where('user_id',$_SESSION['user_id']);
    //           $result = $this->db->get('users');
    //           return $result;
    //       }      
} 
?>  
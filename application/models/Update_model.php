<?php  
  
class Update_model extends CI_Model 
{  
    public function update() 
    {  
        $data = array( 
        "username"  =>$this->input->post("editname"),
        "email"  =>$this->input->post("editemail"),
        "password"  =>$this->input->post("editpassword"),
        "phone"  =>$this->input->post("editphone")
        ); 
        $a = $_SESSION['user_id'];
        $this->db->where("user_id", $a);
        $up=$this->db->update("users", $data);
        if ($up)
        {
         return true;
        }
        else
        {
            return false;
        }
    }
    public function getuserdetails()
          {
              $this->db->where('user_id',$_SESSION['user_id']);
              $result = $this->db->get('users');
              // if ($result->num_rows() > 0 ) {
                 return $result;
               // } 
              
          }      
} 
?>  
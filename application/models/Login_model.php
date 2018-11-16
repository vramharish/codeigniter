<?php  
  
class Login_model extends CI_Model 
{  
    public function log_in_correctly() {  
  
        $this->db->where('username', $this->input->post('logusername'));  
        $this->db->where('password', $this->input->post('logpassword'));  
        $query = $this->db->get('users');
        // echo $this->db->last_query();
        // echo $query->num_rows();
        if ($query->num_rows() == 1)  
        {  
            $row = $query->row();
            $data = array(
                    'user_id' => $row->user_id,
                    'username' => $row->username,
                    'email' => $row->email,
                    'password' => $row->password,
                    'phone' => $row->phone,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;  
            // echo "true";
        } 
        else 
        {  
            return false;  
            // echo "false";
        }  
    }  
}  
?>  
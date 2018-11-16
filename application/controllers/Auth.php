<?php


class Auth extends CI_Controller
{
      //Loading Register page
      public function index()
      {
            $this->load->view('register');
      }

      //Loading Login page
	public function login()  
      {            
            $this->load->view('login');  
      }

	//Form Register
	public function register_request()
  	{
            //echo "ok";
            $this->load->library('form_validation');
            $this->form_validation->set_rules("username","Username","required");
            $this->form_validation->set_rules("email","Email","required");
            $this->form_validation->set_rules("password","Password","required");
            $this->form_validation->set_rules("phone","Phone","required");
        
        if($this->form_validation->run())
        {
        		//Model load
        		//echo "display";
             $this->load->model("Auth_model");
             $data = array(
                  "username"  =>$this->input->post("username"),
                  "email"  =>$this->input->post("email"),
                  "password"  =>$this->input->post("password"),
                  "phone"  =>$this->input->post("phone")
                  );
             if($this->input->post("submit"))
             {
               //calling method in model class
             	echo "submit";
                  $this->Auth_model->insert_db($data);
                  redirect("Auth/index_page");
             }
        }
        else
        {
            //echo "else";
             //false
             $this->index();
        }
  	}

      //Index Register
 	public function index_page()
 	{
 	    $this->index();
 	}

     

      //Form Login
      public function login_request()
      {
            echo "if";
            $this->load->library('form_validation');
            $this->form_validation->set_rules("logusername","Username","required");
            $this->form_validation->set_rules("logpassword","Password","required");

        if($this->form_validation->run())
        {
            //Model load
            //echo "login_display";
            echo "form_validation";
             $this->load->model("Login_model");
            
             if($this->input->post("login"))
             {
               //calling method in model class
                  echo "post login";
                  $result = $this->Login_model->log_in_correctly();
                  if ($result) 
                  {
                        echo "login if";
                        redirect("Auth/home_page");
                        
                  }
                  else{
                        $this->login();
                  }                 
             }
        }
        else
        {
            echo "else";
             //false
             $this->login();
        }
      }


      //Home
       public function home_page()
      {     
            if (!isset($_SESSION['user_id'])) {
              redirect();
            }
            $this->load->model("Update_model");                  
            $data['get_user'] = $this->Update_model->getuserdetails();
            $this->load->view('home' , $data);
      }

      //update
      public function update_request()
      {
            $this->load->model("Update_model");
            
             if($this->input->post("update"))
             {
               //calling method in model class
                  $res = $this->Update_model->update();
                  if ($res) 
                  {
                        //redirect("Auth/home_page");
                         echo "Successfully updated";
                  }
                  else{
                       //redirect("Auth/home_page");
                       echo "failed";
                  }                 
             }
      }


      //delete
      public function delete_request()
      {
            $this->load->model("delete_model");
                      
             
               //calling method in model class
                  $res = $this->delete_model->delete();
                  if ($res) 
                  {
                        //redirect("Auth/login");
                         // echo "Successfully Deleted";
                    redirect('logout');
                  }
                  else{
                       //redirect("Auth/home_page");
                       echo "failed";
                  }                 
             
      }




}
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Home extends CI_Controller {  
      

      function __construct()
      {
        parent::__construct();

        $this->load->model('UserModel');

      }

      //
    public function index()  
    {  
        if($this->input->post())
        {

            $emailId = strtolower($this->input->post('email'));
             if ($this->userlib->isEmailExist($emailId)) 
             {

                $isLogin = $this->userlib->isLogin($emailId);
                if (empty($isLogin)) {
            $msg = '<div class="alert alert-danger"> You are already logged in</div>';
                        $this->session->set_flashdata('flashmsg', $msg);
            }

              else{
                 $password =  $this->input->post('password');

                $result = $this->UserModel->checkuser($emailId,$password);
                if ($result) {
                            $infoarr['user'] = $result;
                            //print_r($infoarr); die;
                            $this->session->set_userdata($infoarr);
                            redirect('Home/dashboard');
                        }
                else{
               
                $msg = '<div class="alert alert-danger"> Wrong password/email. Try again or click Forgot password to reset it.</div>';
                        $this->session->set_flashdata('flashmsg', $msg);

                }

                }
            }
            else {
                   
                    $msg = '<div class="alert alert-danger"> The email id does not exist !</div>';
                        $this->session->set_flashdata('flashmsg', $msg);
    }
}
        $this->load->view("signin");  
    }  
    function savingdata()  
    {  
        
       
       if(isset($_POST['register']))
       {

        if ($this->userlib->isEmailExist($this->input->post('email'))) {
                        
                        $msg = '<div class="alert alert-danger"> That Email Id is taken. Try another.</div>';
                        $this->session->set_flashdata('flashmsg', $msg);
                    }
                   

         else{
        $res = $this->UserModel->saverecords();
        if($res)
        {
            $msg="<div class='alert alert-success'>Your registration Successfully </div>";
                $this->session->set_flashdata('flashmsg',$msg);
                redirect("home");
        }
        else{

            $msg = '<div class="alert alert-danger"> Something went worng</div>';
                        $this->session->set_flashdata('flashmsg', $msg);
        }

          }
       }                  
        
  
        $this->load->view("student_registration");  
    } 



    
}  
?>  
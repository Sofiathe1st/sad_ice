<?php

class Main extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("login.php");
}

public function register_user(){

      $user=array(
      'user_username'=>$this->input->post('user_username'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_department_name'=>$this->input->post('user_department_name'),
      'user_type'=>$this->input->post('user_type'),
        );
        print_r($user);

$department_name_check=$this->user_model->department_name_check($user['user_department_name']);

if($department_name_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('main/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('main/user_register_view');


}

}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_username'=>$this->input->post('user_username'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_username'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_department_name',$data['user_department_name']);
        $this->session->set_userdata('user_type',$data['user_type']);
        $this->session->set_userdata('user_username',$data['user_username']);

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_profile.php');
/*---------------------test-----------------------------------------------------------------*/
}
function eva_1(){

$this->load->view('eva_1.php');

}
function eva_2(){

$this->load->view('eva_2.php');

}
/*---------------------test-----------------------------------------------------------------*/

public function user_logout(){

  $this->session->sess_destroy();
  redirect('main/login_view', 'refresh');
}
public function user_register_view(){

$this->load->view('register.php');


}

}

?>

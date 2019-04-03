<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($user_username,$user_password){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_username',$user_username);
  $this->db->where('user_password',$user_password);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function department_name_check($user_department_name){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_department_name',$user_department_name);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


}


?>

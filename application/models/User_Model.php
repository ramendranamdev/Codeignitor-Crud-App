<?php

  /**
   *
   */
  class User_Model extends CI_Model
  {

    public function insertUser()
    {
      // code...
      $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'mobile' => $this->input->post('mobile'),
        'dob' => $this->input->post('dob'),
        'pincode' => $this->input->post('pincode')
      );

      return $this->db->insert('user',$data);

    }



    public function editUser()
    {

      $d = array( 'id'=>$this->input->post('id') );


      $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'mobile' => $this->input->post('mobile'),
        'dob' => $this->input->post('dob'),
        'pincode' => $this->input->post('pincode')
      );

      return $this->db->update('user',$data,'id='.$d['id']);
    }


    public function deleteUser(){

      $d = array( 'id'=>$this->input->post('deleteFormId') );

      echo $d['id'];

      return $this->db->query("delete from user where id='".$d['id']."'");
    }


    public function getData(){
      $query = $this->db->get('user');
      return $query->result();
    }

  }


 ?>

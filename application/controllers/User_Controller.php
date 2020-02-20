<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
   * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data = $this->user->getData();
		$this->load->view('index.php');
	}

	public function create(){

		$this->form_validation->set_rules('name','Username','required|regex_match[/[a-zA-Z]/]');
		$this->form_validation->set_rules('email','E-mail','required|valid_email|callback_checkEmailIsUnique');
		$this->form_validation->set_rules('mobile','Phone Number','required|callback_checkPhoneIsUnique');
		// $this->form_validation->set_rules('pincode','Pincode','required');

		if( $this->form_validation->run() == TRUE ){
			$this->user->insertUser();
			redirect('');
		}else{
			$this->load->view('index.php');
		}

	}

	public function checkEmailIsUnique($str){
		$this->form_validation->set_message(__FUNCTION__,"This email is already registered.Try again.");

		$this->db->select('*');

    $this->db->from('user');

    $this->db->where('email', $str );

    $query = $this->db->get();

    if ( $query->num_rows() > 0 )
    {
		  return FALSE;
    }else{
			return TRUE;
		}

	}

	public function checkEmailIsUniqueEdit($str,$id){

		$this->form_validation->set_message(__FUNCTION__,"This email is already registered.Try again.");

		$query = $this->db->query("SELECT * FROM user WHERE id = $id LIMIT 1;");
		$row = $query->row(0);

		//Check If Email is same
		if( isset($row) ){
			if( $str == $row->email ){
				return true;
			}
		}

		$this->db->select('*');
		$this->db->from('user');
    $this->db->where('email', $str );
    $query = $this->db->get();

    if ( $query->num_rows() > 0 ){
		  return FALSE;
    }else{
			return TRUE;
		}
	}

	public function checkPhoneIsUnique($str){
		$this->form_validation->set_message(__FUNCTION__,"This phone is already registered.Try Again.");


		$this->db->select('*');

    $this->db->from('user');

    $this->db->where('mobile', $str );

    $query = $this->db->get();

		$row;

    if ( $query->num_rows() > 0 )
    {
        return FALSE;
    }else{
			return TRUE;
		}

	}

	public function checkPhoneIsUniqueEdit($str,$id){
		$this->form_validation->set_message(__FUNCTION__,"This phone number is registered with another user.Try Again.");

		$query = $this->db->query("SELECT * FROM user WHERE id = $id LIMIT 1;");
		$row = $query->row(0);

		//Check If Email is same
		if( isset($row) ){
			if( $str == $row->mobile ){
				return true;
			}
		}


		$this->db->select('*');
    $this->db->from('user');
    $this->db->where('mobile', $str );
    $query = $this->db->get();

    if ( $query->num_rows() > 0 )
    {
        return FALSE;
    }else{
			return TRUE;
		}

	}

	public function edit(){
		// echo "Edited";

		$id = $this->input->post('id');

		$this->form_validation->set_rules('name','Username','regex_match[/[a-zA-Z]/]');
		$this->form_validation->set_rules('email','E-mail',"valid_email|callback_checkEmailIsUniqueEdit['".$id."']");
		$this->form_validation->set_rules('mobile','Phone Number',"callback_checkPhoneIsUniqueEdit['".$id."']");
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('pincode','Pincode','required');


		if( $this->form_validation->run() == 'TRUE' ){
			$res = $this->user->editUser();

			if($res == 'TRUE'){
				redirect('');
			}else{
				echo "error";
			}
		}else{
			$this->load->view('index.php');
		}


	}

	public function delete(){

		$res = $this->user->deleteUser();

		if($res == 'TRUE'){
			echo "deleted";
			redirect('');
		}else{
			echo 'error';
		}

	}

}

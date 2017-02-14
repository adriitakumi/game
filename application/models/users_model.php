<?php

class Users_model extends CI_Model {
	
	public function construct(){
		parent::__construct();
	}
	
	/*public function login ($username, $password) {
		$this->db->where('username', $username);
		
		$result = $this->db->get('users');
		$result = $result->result_array();
		
		if (strcmp($result[0]['password'], $password != 0)){
			return FALSE;
		}
		return TRUE;
	}
	
	public function login2 ($username, $password) {
		$this->db->where('username', $username);
		
		$result = $this->db->get('admin');
		$result = $result->result_array();
		
		if (strcmp($result[0]['password'], $password != 0)){
			return FALSE;
		}
		return TRUE;
	}
	
*/
	public function login ($username, $password){
	$this->db->where('username',$username);
		$result = $this->db->get('users');
		
		$result = $result->result_array();
		

		
		if(strcmp($result[0]['password'], $password) != 0) {
			return FALSE;
						
		}	
	}
	
	public function add($data) {
				
		$username = $data['username'];
		$password = $data['password'];
		$fname = $data['fname'];
		$lname = $data['lname'];

		$kek = array(
			'username' => $username,
			'password' => $password ,
			'fname' => $fname ,
			'lname' => $lname 			
		);
		$this->db->insert('users', $kek); 
	}
		
}
<?php
class User extends Model{

  public function registerUser($data){

		$sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User registered.';
		return $message;

	}

}

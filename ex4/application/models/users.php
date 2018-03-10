<?php
class Users extends Model{

	// Constructor
	public function __construct(){
		parent::__construct();
		}

	public function getUser($uID){
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}

	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users'.$numusers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	}

	//Correct addUser method

	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}

	//JENNIFER's addUser method

	public function addUser($data){
		var_dump($data)
		$uID = $_POST["post_uID"];
		$email = $_POST["post_email"];
		$password = $_POST['post_password'];
		$fname = $_POST['post_fname'];
		$lname = $_POST['post_lname'];

		$sql="INSERT INTO users (email, password, first_name, last_name) VALUES (?,?)";
		/* $sql="INSERT INTO users (email, password, first_name, last_name) VALUES ('".$email."','".$password."','".$fname."','".$lname."')"; */
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}

	public function checkUser($email, $password) {
		$sql = "SELECT email, password FROM users Where email = ?";

		$results = $this->db->getrow($sql, array($email));

		$user = $results;

		$password_db = $user[1];

		if(password_verify($password, $password_db)) {
			return true;
		}
		else {
			return false;
		}

	}

	public function getUserFromEmail($email) {
		$sql = 'SELECT * FROM users WHERE email = ?';

		$resluts = $this->db->getrow($sql, array($email));

		$user = $results;

		return $user;
		
	}


}

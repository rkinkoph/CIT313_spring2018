<?php
class User extends Model{


  public function getAllUsers(){
		$sql='SELECT uID, first_name, last_name, email, password FROM users';

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}
		return $users;
	}

  function getUser($uID){

 $sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
// INNER JOIN table2 ON table1.column_name = table2.column_name;
		// perform query
		$results = $this->db->getrow($sql, array($uID));

		$user = $results;

		return $user;

	}

  public function registerUser($data){

    $sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
    $this->db->execute($sql,$data);
    $message = 'User registered.';
    return $message;

  }


}

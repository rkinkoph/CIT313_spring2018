<?php
class Post extends Model{

	function getPost($pID){

 $sql =  'SELECT pID, title, content, date, categoryID, uID FROM posts WHERE pID = ?';
// INNER JOIN table2 ON table1.column_name = table2.column_name;
		// perform query
		$results = $this->db->getrow($sql, array($pID));

		$post = $results;

		return $post;

	}

	public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT pID, title, content, date, categoryID, uID FROM posts'.$numposts;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (title, content, categoryID, date) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}

	public function updatePost($data){

		$sql='UPDATE posts SET title = ?,content = ?,date = ?,categoryID = ? WHERE pID = ?';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}


}

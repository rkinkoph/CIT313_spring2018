<?php
class Comments extends Model{

  public function getComments($pID){

      $sql = 'SELECT c.commentText, c.date, u.first_name, u.last_name FROM comments c INNER JOIN users u ON c.uID = u.uID INNER JOIN posts p on p.pID = c.postID
      WHERE p.pID = ? ORDER BY c.date';

      $results = $this->db->execute($sql, $pID);

   while ($row=$results->fetchrow()) {
          $comments[] = $row;
      }

      return $results;

  }

  public function addComment($data){

      $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
      $this->db->execute($sql,$data);
      $message = 'Comment added.';
      return $message;


  }

}

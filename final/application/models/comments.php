<?php
class Comments extends Model{

  public function getComments($pID){

      $sql = 'SELECT c.commentText, c.date, u.first_name, u.last_name FROM comments c INNER JOIN users u ON c.uID = u.uID
      WHERE c.postID = ? ORDER BY c.date, ASC';

      $results = $this->db->execute($sql, $pID);

   while ($row=$results->fetchrow()) {
          $comments[] = $row;
      }

      return $results;
  }

}

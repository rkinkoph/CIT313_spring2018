
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}
?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/users/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <hr>
<h4>Comments</h4>
      <?php
      foreach($comments as $row) {
      echo $row['commentText']."<br><sub>Posted on ". $row['date']." by ".$row['first_name'].' '.$row['last_name'].'<sub>';
    }
       ?>

<br><br>

<?php
  if (isset($_SESSION['uID'])) {
    echo '<form action="'.BASE_URL.'blog/addcomment/" method="post">
      <textarea name="comment">Leave a comment here...</textarea>
      <br>
      <input name="uID" value="'.$_SESSION["uID"].'" style="display: none">
      <input name="postID" value="'.$pID.'" style="display: none">
      <input type="submit" class= "btn">
    </form>';
  }

?>
<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $message?>
  </div>
<?php }?>

    </div>

<?php include('views/elements/footer.php');?>

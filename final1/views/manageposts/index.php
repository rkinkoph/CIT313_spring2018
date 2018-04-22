<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

<a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add a Post</a> <a href="<?php echo BASE_URL;?>categories/" class="btn btn-primary">Manage Categories</a>
<hr>


<?php foreach($posts as $p){?>
		<h3><?php echo $p['title'];?></a></h3>
		<sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/users/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
		<br><button class='btn'><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>">View post</a></button>
		<button class='btn'><a href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>">Edit post</a></button>
		<button class='btn'><a href="<?php echo BASE_URL?>manageposts/delete/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>">Delete post</a></button>
<?php }?>

      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

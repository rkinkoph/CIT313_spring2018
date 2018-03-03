
<?php include('elements/header.php');?>
<?php
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">
<a href="<?php echo BASE_URL?>addpost/edit/<?php echo $pID?>" style="float:right"><small>Edit Post</small></a>
<h1><?php echo $title;?></h1>
<h3><?php $d = new DateTime( $date); echo "Posted on " .$d->format("l, F d, Y h:i:s ")?></h3>
  </div>

<?php echo $content;?>

</div>
<?php }?>

<?php if( is_array($posts) ) {?>

<div class="container">
<div class="page-header">


<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
		<h5><?php $d = new DateTime($p['date']); echo "Posted on " .$d->format("l, F d, Y h:i:s ")?></h5>

	<p><?php echo $p['content'];?></p>



<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>

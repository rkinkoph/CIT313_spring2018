
<?php include('elements/header.php');?>

<?php if(isset($member)) {

	?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
</div>

<h4><?php echo $first_name;?> <?php echo $last_name;?></h4><br />
<p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>

</div>
<?php }?>

<?php if(isset($members)) {?>

<div class="container">
<div class="page-header">
  <h1><?php echo $title;?></h1>
</div>

	<?php foreach($members as $m){?>
		<h4><a href="<?php echo BASE_URL?>members/view/<?php echo $m['uID'];?>"><?php echo $m['first_name'];?> <?php echo $m['last_name'];?></a></h4>
		<p><a href="mailto:<?php echo $m['email'];?>"><?php echo $m['email'];?></a></p>
  <?php } ?>
</div>

<?php }?>


<?php include('elements/footer.php');?>

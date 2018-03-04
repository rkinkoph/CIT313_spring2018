
<?php include('elements/header.php');?>
<?php
if( isset($member) ) {
	extract($member);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
</div>

<?php echo $first_name;?> <?php echo $last_name;?><br />
<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>

</div>
<?php }?>

<?php if( isset($members) ) {?>

<div class="container">
<div class="page-header">
  <h1><?php echo $title;?></h1>
</div>

	<?php foreach($members as $m){?>
		<h3><a href="<?php echo BASE_URL?>members/view/<?php echo $m['uID'];?>"><?php echo $m['first_name'];?> <?php echo $m['last_name'];?></a></h3>
		<p><a href="mailto:<?php echo $m['email'];?>"><?php echo $m['email'];?></a></p>
  <?php } ?>
</div>

<?php }?>


<?php include('elements/footer.php');?>

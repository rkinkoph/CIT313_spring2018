<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $channel_title;?></h1>
		<h4><?php
			for($i = 0; $i<$numItems; $i++){
				echo $feed_data['title'][$i];
				echo $feed_data['pub'][$i];
				echo $feed_data['desc'][$i];
			}
			?>

  </div>
    <div class="alert alert-success">
        <?php echo $message;?>
    </div>


</div>
<?php include('views/elements/footer.php');?>

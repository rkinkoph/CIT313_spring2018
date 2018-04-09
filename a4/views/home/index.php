<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
		<h4><?php echo $channel_info;?></h4>
		<p><?php echo $feed_data;?></p>
  </div>
    <div class="alert alert-success">
        <?php echo $message;?>
    </div>


</div>
<?php include('views/elements/footer.php');?>

<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>

	         <form id ="form" action="<?php echo BASE_URL?>login/do_login>" method="post" onsubmit="editor.post()">
	             <label>Email</label>
	             <input type="email" class="span6" name="email" value="<?php echo $email?>">
	             <br>
	             <label>Password</label>
	             <input type="password" class="span6" name="password"  value="<?php echo $password?>">
	             <br>
	             <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
	         </form>



  </div>
</div>
<?php include('elements/footer.php');?>

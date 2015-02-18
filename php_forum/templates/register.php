<?php include ('includes/header.php'); ?>
	<form role="form" enctype="multipart/form-data" method="post" action="register.php">
	  <div class="form-group">
	    <label>Name*</label> <input type="text" class="form-control" name="email" placeholeder="Enter Your Name">
	  </div>
	  <div class="form-group">
	    <label>Email Address*</label>
	    <input type="email" class="form-control" name="email" placeholder="Enter Your E-mail Address">
	  </div>
	  <div class="form-group">
	    <label>Chose Username*</label>
	    <input type="text" class="form-control" name="username" placeholder="Create A Username">
	  </div>
	  <div class="form-group">
	    <label>Password*</label>
	    <input type="password" class="form-control" name="password" placeholder="Enter A Password">
	  </div>
	  <div class="form-group">
	    <label>Confirm Password*</label>
	    <input type="password" class="form-control" name="password2" placeholder="Enter A Password Again">
	  </div>
	  <div class="form-group">
	    <label>Upload Avatar</label>
	    <input type="file" name="avatar">
	    <p class="help-block"></p>
	  </div>
	  <div class="form-group">
	  <label>Abaut Me</label>
	    <textarea id="abaut" rows="6" cols="80" class="form-control" name="abaut" placeholder="Tell us abaut yourself (Optional)"></textarea>
	  </div>
	  <input name="register" type="submit" class="btn btn-default" value="Register" />
	</form>
<?php include ('includes/footer.php'); ?>
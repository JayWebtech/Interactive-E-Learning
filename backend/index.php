<?php include '../include/server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  	<link href="../font-awesome/all.css" rel="stylesheet">
  	<script type="text/javascript" src="../js/jquery.min.js"></script>
  	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../js/sweetalert.js"></script>
    <script src="../dist/theater.min.js"></script>
</head>
<style type="text/css">
		body{
  			background-image: radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url('../img/admin.jpg');
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			height: 100vh;
  		}
</style>
<body>

	  <?php
    if ($_GET['msg']=="error") { ?>
        <script>
       
             swal.fire({
              icon : 'error',
                 type : 'error',
                 title : 'Error',
                 text : 'Wrong Login Details, try Again',
                 successButtonColor: '#3085d6',
             })
       
    </script> 
    <?php }
?>


	<div id="login">
		<h3>ADMIN LOGIN</h3>
		<p>Login to manage E-Learning lessons</p>
		<br>
		<form action="index.php" method="POST">
			<span class="fa fa-user icon"></span>
			<label>Username</label>
			<input type="text" name="uname" placeholder="Enter your Username" class="form-control">
			<br>
			<span class="fa fa-lock icon"></span>
			<label>Password</label>
			<input type="password" name="pword" class="form-control" placeholder="Engter Password"><br>
			<button class="btn btn-warning btn-block btn-lg" name="admin"><span class="fa fa-sign-in-alt"></span> Sign in</button>
		</form>
	</div>

</body>
</html>
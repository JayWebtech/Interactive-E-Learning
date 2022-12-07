<?php
include '../include/server.php';
session_start();
$uname = $_SESSION['uname'];
if ($uname=="") {
 echo "<script>window.open('index.php','_self')</script>";
}

?>
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
    <style type="text/css">
		body{
  			background-image: radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url('../img/admin.jpg');
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  		}
  		.sidenav {
      background-color: #150734;
      height: 100vh;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
</style>
</head>
<body>

	<section id="dashboard">
		<div class="container-fluid">
  			<div class="row content">
    			<div class="col-sm-2 sidenav">
    				<center><span class="fa fa-user smain"></span></center>
    				<br>
    				<ul>
    					<li><a href="dashboard.php"><span class="fa fa-address-card"></span> Dashboard</a></li>
    					<li><a href="add_lesson.php"><span class="fa fa-calendar-plus"></span> Add Lesson</a></li>
    					<li><a href="view_lesson.php"><span class="fa fa-check-circle"></span> View Lessson</a></li>
    					<li><a href="../index.php"><span class="fa fa-desktop"></span> View Website</a></li>
    					<li><a href="index.php"><span class="fa fa-sign-out-alt"></span> Logout</a></li>
    				</ul>
    			</div>
     			<div class="col-sm-10">
     				<div class="row">
     					<div class="col-sm-6">
     						<div class="box1 shadow-lg">
     							<h1><span class="fa fa-school"></span> PRIMARY 1</h1>
     							<br>
     							<h6>Lessons</h6>
     							<h6>Text/Images</h6>
     							<h6>Video</h6>
     						</div>
     					</div>
     					<div class="col-sm-6">
     						<div class="box1 shadow-lg">
     							<h1><span class="fa fa-school"></span> PRIMARY 2</h1>
     							<br>
     							<h6>Lessons</h6>
     							<h6>Text/Images</h6>
     							<h6>Video</h6>
     						</div>
     					</div>
     					<div class="col-sm-12">
     						<div class="info">
     							<h2>INTERACTIVE E-LEARNING SYSTEM</h2>
     							<p>The purpose of this research is to make learning fun for primary one and two in Nigeria.  
Interactive learning is a kind of learning process which used multimedia as a platform to distribute the knowledge and information in an easy and interactive way. Nowadays, teachers usually use traditional method and material in their learning process. Traditional method includes some question and answer activities, written quiz using paper and use of whiteboard. Today, technologies and Information and Communication Technology (ICT) spread worldwide very fast and the use of computer in education have made it easier for users to access, deliver and store  knowledge. Furthermore, the ability of ICT to deliver information quickly, correctly and attractively in the form of multimedia has also made learning more enjoyable. 
</p>
     						</div>
     					</div>
     				</div>
     			</div>
 			</div>
		</div>
	</section>
	
</body>
</html>
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
  	
    <script src="../dist/theater.min.js"></script>
     <!-- inject:css -->  <script type="text/javascript" src="nicEdit/nicEdit.js"></script>
<script type="text/javascript">
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
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
     					
     					<div class="col-sm-12">
     						<div class="info2">
     							<h2 align="center">ADD LESSON</h2>
     							<?php include "../include/errors.php"; ?>
                    <br>
                    <form action="add_lesson.php" method="POST" enctype="multipart/form-data">

                       <label> <span class="fa fa-hospital-user icon"></span> Class</label>
                        <select name="class" class="form-control">
                         <option value=""><--------Select Class-----------></option>
                          <option value="Primary 1">Primary 1</option>
                          <option value="Primary 2">Primary 2</option>
                       </select>
                       <br>
                       <label> <span class="fa fa-clipboard-check icon"></span> Lesson Type</label>
                       <select name="lesson_type" id="lesson_type" class="form-control">
                         <option value=""><--------Select Lesson Type-----------></option>
                          <option value="imgtext">Images/Text</option>
                          <option value="videotext">Video/Text</option>
                       </select>
                       <br>
                       <label> <span class="fa fa-clipboard-check icon"></span> Subject</label>
                       <select name="subject" class="form-control">
                         <option value=""><--------Select Subject-----------></option>
                          <option value="Maths">Basic Maths</option>
                          <option value="English">English</option>
                          <option value="Computer">Computer Studies</option>
                       </select>
                       <br>
                      <label> <span class="fa fa-i-cursor icon"></span> Text</label>
                      <div style="background-color: #fff !important;">
                       <textarea name="textcap" id="area2"  class="form-control" style="width: 100%;height: 50vh;"></textarea>
                     </div>

                      <br>
                      <div id="imgfile" style="display: none;">
                      <label> <span class="fa fa-camera icon"></span> Image file</label>
                      <input type="file" class="form-control" name="imgfile"  accept=".jpg,.jpeg,.png"  >
                      </div>

                       <div id="video" style="display: none;">
                      <label> <span class="fa fa-video icon"></span> Video File</label>
                      <input type="file" class="form-control" name="video" id="video" accept=".avi,.3gp,.mp4"  >
                    </div>
                      <br>

                      <button class="btn btn-warning btn-lg btn-block" name="lesson">SUBMIT</button>
                    </form>

     						</div>
     					</div>
     				</div>
     			</div>
 			</div>
		</div>
	</section>

  <script type="text/javascript">
    $(document).ready(function(){
    $('#lesson_type').on("change", function(){
      var txt = $(this).val();
      if (txt == 'imgtext') {
        $('#imgfile').css('display','block');
        $('#video').css('display','none');
      }else if(txt == 'videotext'){
        $('#imgfile').css('display','none');
        $('#video').css('display','block');
      }
      else{
       $('#video').css('display','none');
        $('#imgfile').css('display','none');
      }
    

    });
     });
  </script>

	
</body>
</html>

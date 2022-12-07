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
     						<div class="info2" >
     							<h2 align="center">VIEW LESSONS</h2>
     							<?php include "../include/errors.php"; ?>
                    <br>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">English</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Maths</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Computer</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="background-color: #fff;">
    
     <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                           <th>Image/Video</th>
                            <th>Text</th>
                              <th>Class</th>
                            <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>

                        <?php
          

    $result = mysqli_query($dbcon,"SELECT * FROM `english` ORDER BY id DESC");
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
     <?php
         if ($row['lesson_type']=="imgtext") {
            echo "<td><img src='img/".$row['imgfile']."' style='width: 150px;height:100px;border-radius: 5px !important;'></td>";
      }else{
        echo "<td>
        <video width='150' height='150' controls>
        <source src=' video/".$row['video']."' type='video/mp4'>
        </video>
        </td>";
      }
     ?>

               
              
                  <td><?php echo $row['textcap']; ?></td>
                 <td><?php echo $row['class']; ?></td>
                  <td><a href='delete_eng.php?id=<?php echo $row['id']; ?>'><button class='btn btn-danger btn-sm'>Delete</button></a></td>
                </tr>

                <?php
              }
            ?>



                     
                       
                      </tbody>
                    </table>
                  </div>

  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="background-color: #fff;">
    
<div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                           <th>Image/Video</th>
                            <th>Text</th>
                              <th>Class</th>
                            <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>

                        <?php
          

    $result = mysqli_query($dbcon,"SELECT * FROM `maths` ORDER BY id DESC");
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
     <?php
         if ($row['lesson_type']=="imgtext") {
            echo "<td><img src='img/".$row['imgfile']."' style='width: 150px;height:100px;border-radius: 5px !important;'></td>";
      }else{
        echo "<td>
        <video width='150' height='150' controls>
        <source src=' video/".$row['video']."' type='video/mp4'>
        </video>
        </td>";
      }
     ?>

               
              
                  <td><?php echo $row['textcap']; ?></td>
                 <td><?php echo $row['class']; ?></td>
                  <td><a href='delete_mth.php?id=<?php echo $row['id']; ?>'><button class='btn btn-danger btn-sm'>Delete</button></a></td>
                </tr>

                <?php
              }
            ?>



                     
                       
                      </tbody>
                    </table>
                  </div>


  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" style="background-color: #fff;">
    
<div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                           <th>Image/Video</th>
                            <th>Text</th>
                              <th>Class</th>
                            <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>

                        <?php
          

    $result = mysqli_query($dbcon,"SELECT * FROM `computer` ORDER BY id DESC");
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
     <?php
         if ($row['lesson_type']=="imgtext") {
            echo "<td><img src='img/".$row['imgfile']."' style='width: 150px;height:100px;border-radius: 5px !important;'></td>";
      }else{
        echo "<td>
        <video width='150' height='150' controls>
        <source src=' video/".$row['video']."' type='video/mp4'>
        </video>
        </td>";
      }
     ?>

               
              
                  <td><?php echo $row['textcap']; ?></td>
                 <td><?php echo $row['class']; ?></td>
                  <td><a href='delete_com.php?id=<?php echo $row['id']; ?>'><button class='btn btn-danger btn-sm'>Delete</button></a></td>
                </tr>

                <?php
              }
            ?>



                     
                       
                      </tbody>
                    </table>
                  </div>

  </div>
</div>   
     						</div>
     					</div>
     				</div>
     			</div>
 			</div>
		</div>
	</section>


</body>
</html>

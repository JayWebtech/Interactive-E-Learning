<?php include '../include/db_connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Interactive Learning System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  	<link href="../font-awesome/all.css" rel="stylesheet">
  	<script type="text/javascript" src="../js/jquery.min.js"></script>
  	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../js/sweetalert.js"></script>
    <script src="../dist/theater.min.js"></script>
  	<style type="text/css">
  		body{
  			background-image: radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url('../img/13.jpg');
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  		}
  	</style>
</head>
<body>

  <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><span class="fa fa-user"></span> ENGLISH LESSONS</h3>
          </div>
        </div>
      </div>
  </section>
  <section id="sidebar">
     <div class="container-fluid">
        <div class="row content ">
          <div class="col-md-2">
            <center><img src="../img/bookshelf.png" style="width: 50%;margin-top: 10px;"></center>
            <br>
            <ul>
              <li><a href="index.php"><span class="fa fa-atom"></span> Home</a></li>
              <li><a href="maths.php"><span class="fa fa-balance-scale-right"></span> Maths</a></li>
              <li><a href="computer.php"><span class="fa fa-desktop"></span> Computer </a></li>
              <li><a href="english.php"><span class="fa fa-mail-bulk"></span> English</a></li>
               <li><a href="../index.php"><span class="fa fa-sign-out-alt"></span> Logout</a></li>
            </ul>
          </div>
          <div class="col-md-10">
            <div id="dynamic">
              
                 <?php
          if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
  } else {
    $page_no = 1;
        }

  $total_records_per_page = 1;
    $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2"; 

  $result_count = mysqli_query($dbcon,"SELECT COUNT(*) As total_records FROM `english` WHERE class = 'Primary 1' ");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1; // total page minus 1



    $result = mysqli_query($dbcon,"SELECT * FROM `english` WHERE class = 'Primary 1' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){


      ?>
     <?php
         if ($row['lesson_type']=="imgtext") {
            echo "<center><img src='../backend/img/".$row['imgfile']."' style='width: 50%;border-radius: 5px !important;'></center>";
      }else{
        echo "<center>
        <video style='width:50%;' controls>
        <source src='../backend/video/".$row['video']."' type='video/mp4'>
        </video>
        </center>";
      }
     ?>

               
              
                  <div style="color: #fff;margin-bottom: 20px;margin-top: 15px;" align="center">
                    <span class="fa fa-play" id="playthis" onclick="playthis()" style="background-color: orange;padding: 10px;color: #000;border-radius: 30px;"></span> <span style="background-color: orange;color: #000;padding: 5px;font-family: Bold;"> PLAY THIS</span>
                    <p id="readthis"><?php echo $row['textcap']; ?></p>
                      
                    </div>
                <?php
              }
            ?>

<?php include("../function_event.php"); ?>
     <h6 style="text-align: center !important;color: #fff;">Page <?php echo $page_no." of ".$total_no_of_pages; ?></h6>
               
            </div>
          </div>
        </div>
      </div>
    
  </section>


  <!---<audio src="../voice/intro.m4a" autoplay="true" style="display: none;">!--->

<script src="../js/script.js" async defer></script>
</body>
</html>
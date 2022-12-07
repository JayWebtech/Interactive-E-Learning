<?php
session_start();
include 'db_connection.php';
$errors = array();
if (isset($_POST['admin'])) {
  
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];

	
       $check_user = "SELECT * FROM backend WHERE uname = '$uname' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
        $_SESSION['uname'] = $uname;
          header('Location: dashboard.php?msg=success');
       }else{
         header('Location: index.php?msg=error');
      } 
      }
    
   if (isset($_POST['lesson'])) {

  $class = $_POST['class'];
  $lesson_type = $_POST['lesson_type'];
  $subject = $_POST['subject'];
  $textcap = $_POST['textcap'];
  $imgfile = $_POST['imgfile'];
  $video = $_POST['video'];

  if ($subject=="") {
      array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Subject is Required
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
  }elseif($class==""){
      array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Class is Required
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
  }elseif($lesson_type==""){
      array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Lesson Type is Required
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
  }else{

     $filename = $_FILES['imgfile']['name'];
        move_uploaded_file($_FILES['imgfile']['tmp_name'], "img/".$_FILES['imgfile']['name']);

       $filename2 = $_FILES['video']['name'];
        move_uploaded_file($_FILES['video']['tmp_name'], "video/".$_FILES['video']['name']);

    if ($subject=="Maths") {
        $sql = "INSERT INTO maths (textcap,imgfile,lesson_type,class,video) VALUES ('$textcap','$filename','$lesson_type','$class','$filename2')";
        if (mysqli_query($dbcon,$sql)) {
             array_push($errors, '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Lesson Uploaded Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }
          else{
             array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Error, Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }

    }elseif ($subject=="English"){
      $sql = "INSERT INTO english (textcap,imgfile,lesson_type,class,video) VALUES ('$textcap','$filename','$lesson_type','$class','$filename2')";
        if (mysqli_query($dbcon,$sql)) {
            array_push($errors, '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Lesson Uploaded Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }
          else{
              array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Error, Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }
    }else{
      $sql = "INSERT INTO computer (textcap,imgfile,lesson_type,class,video) VALUES ('$textcap','$filename','$lesson_type','$class','$filename2')";
        if (mysqli_query($dbcon,$sql)) {
             array_push($errors, '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Lesson Uploaded Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }
          else{
             array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Error, Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
          }
    }

   


   }
 }





?>

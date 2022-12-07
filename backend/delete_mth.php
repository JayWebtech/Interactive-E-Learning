<?php
	session_start();
	include_once('../include/db_connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM maths WHERE id = '".$_GET['id']."'";

		if (mysqli_query($dbcon,$sql)) {
			 array_push($errors, '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Lesson Deleted Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
		}
		else{
			 array_push($errors, '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error: </strong> Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'); 
		}
	}
?>

 
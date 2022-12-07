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
  			height: 100vh;
  		}
  	</style>
</head>
<body onload="english()">

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
            <div id="main">
              <center><img src="../img/4.png"  style="width: 30%;"></center>
              <h2 id="text" style="display: none;">WELCOME TO OUR ENGLISH LESSONS</h2>
              <h5 id="text2" style="display: none;">Relax and learn kid</h5> 
              <h6  id="text3" style="display: none;">Click here to start.  Jump to Dynamic Lessons</h6>
               <div id="example"></div>
                <div id="example2"></div>
                 <div id="example4"></div>
               
            </div>
          </div>
        </div>
      </div>
    
  </section>


  <!---<audio src="../voice/intro.m4a" autoplay="true" style="display: none;">!--->

  <script>
  var theater = theaterJS();
  theater.
on('type:start, erase:start', function () {
  theater.getCurrentActor().$element.classList.add('actor__content--typing');
}).
on('type:end, erase:end', function () {
  theater.getCurrentActor().$element.classList.remove('actor__content--typing');
});

  theater.
addActor('example', { speed: 0.9, accuracy: 1.5 }).
addScene('example:<h2>WELCOME TO OUR ENGLISH LESSONS</h2> ', 600);
 theater.
addActor('example2', { speed: 1.2, accuracy: 0.9 }).
addScene('example2: <h5>Relax and learn kid.</h5>', 400);
 theater.
addActor('example4', { speed: 0.8, accuracy: 1.5 }).
addScene('example4: <center>  <a href="eintro.php"><button class="btn btn-warning">Click here to start. <span class="fa fa-chevron-circle-right"></span></button></a> <a href="eng_dynamic.php"><button class="btn btn-warning"><span class="fa fa-chevron-circle-left"></span> Jump to Dynamic Lessons</button> </center>', 400);
</script>

<script src="../js/script.js" async defer></script>
</body>
</html>
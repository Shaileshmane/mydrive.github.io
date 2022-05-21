<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	 Create Classroom
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="header"><h1>My Classroom</h1> </div>
	<form class="info" method="post">
		<div class="head">
	<h2>Creat Classroom</h2>
</div>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Enter Class Name" name="name">
    </div>
</div>
    <div class="form-row">
    	<div class="col">
      <input type="text" class="form-control" placeholder="Enter Section" name="section">
    </div>
</div>
<div class="form-row">
    	<div class="col">
      <input type="text" class="form-control" placeholder="Enter Subject" name="subject">
    </div>
</div>
<div class="form-row">
    	<div class="col">
      <input type="text" class="form-control" placeholder="Enter Teacher Name" name="teacher">
    </div>

</div>
<input type="submit" style="margin-left: 5px; margin-top: 8px;" class="btn btn-primary" value="Submit" name="Submit">
 <input type="submit" style="margin-left: 5px; margin-top: 8px;" class="btn btn-primary" value="Cancle" name="cancle">
 
  </div>
</form>

<?php 
$username ="root";
$password="";
$server ="localhost";
$db ="classroom";

$con = mysqli_connect($server,$username,$password,$db);


if ($con) {
	echo " ";
  
  if (isset($_POST['Submit'])){
    $Name=$_POST['name'];
    $section=$_POST['section'];
    $subject=$_POST['subject'];
    $teacher=$_POST['teacher'];


    $insertquery = "  INSERT INTO lecture(class_name,section,subject,teacher_name) VALUES('$Name','$section','$subject','$teacher')";

    $res = mysqli_query($con,$insertquery);

    if ($res) {
      ?>
      <script>
        swal("Congratulations.!", "Class Has Been Created", "success");
      </script>
      
      <?php
      ?>
   <script>
      	
        window.location.href="http://localhost/Upload,%20Download%20and%20Delete%20files/dashboard.php";
      </script>
      <?php


    }
  }
}




?>

 









</body>
</html>
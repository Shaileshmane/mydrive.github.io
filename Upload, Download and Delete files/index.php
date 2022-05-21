<html>
<head>
    <title> My Class Room</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">


<style>
  body{
    background: url(back1.png);
  }
  .some{
    height: 65px;
  }
  .some img{
    height: 55px;
    width: 55px;
    margin-left: 10px;
    margin-top: 10px;
  }
  .some h2{
    color: white;
    font-size: 25px;
    margin-left: 70px;
    margin-top: -40px;
  }
  .lines{
    background: white;
    height: 1px;
    width: 100%;
  }
  .ritik{
    margin-left: 20px;
    margin-top: 15px;
  }
  .card1{
    height: 170px;
    width: 250px;
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-left: 10px;
    display: inline-flex;
    margin-top: 25px;

  }
  .card1 a img{
    height: 35px;
    width: 35px;
    margin-top: 50px;
    position: relative;
    display: block;
    margin-left: 0px;
  }
  .uploads{
    margin-left: 10px;
  }
</style>


</head>
<body>

<div class="some">
  <img src="images/google-drive.png">  
  <h2>My Drive</h2>
  


</div>
<div class="lines"></div>

<div class="ritik">

<form method="POST" action="upload.php" enctype="multipart/form-data" class="uploads">
    <input type="file" name="file" >
    <input type="submit" value="Upload" class="btn btn-primary">
</form>

 

<?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p class="card1">
        <?php echo $files[$a]; ?>
  
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
         <br><br>  <img src="images/folder.png" title="Download" style="margin-left: -25px; position:relative;">
        </a>

        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
            <img src="images/delete.png" style="margin-top: 96px;   margin-left: px;  position: relative;" title="Delete" >
        </a>
     
    </p>
    <?php
}

?>
 
 </div>
</body>
</html>
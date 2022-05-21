<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Classroom</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<style>
    .head3 img{
        height: 100px;
        width: 100px;

    }
</style>
<body>

<header>
	<div class="head3">
		<img src="images/icon.png">
		<h2> My Classroom</h2>
	</div>
</header>

<div class="click">
	<a href="http://localhost/Upload,%20Download%20and%20Delete%20files/form.php"> Creat Classroom</a>
	<a href=" #"> Login </a>
	  

	  

</div>
 
<div class="line"></div>


<div class="row justify-content-center" id="card3">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4 class="shailesh">Classrooms</h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                             
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","classroom");

                                    $query = "SELECT * FROM lecture";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <div class="lecture">
                                            <tr>  
                                                <td><?= $row['class_name']; ?></td> 
                                            </tr>
                                             <tr>
                                            	<td><?= $row['subject']; ?></td>
                                            </tr>
                                            <tr>
                                            	<td><?= $row['teacher_name']; ?></td>
                                            </tr>
                                        </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="4"><img src="empty.png" style="height: 150px; width: 150px;"></td>
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
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>







 
</body>
</html>
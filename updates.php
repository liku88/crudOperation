<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Minimum Bootstrap HTML Skeleton</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="shorcut icon" type="image/jpg" href="favicon.jpg">

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">
        <div class="row">
        <div class="leftside">
            <div class="col-md-3 mycus1 ">
                <div class="center1">
                <div class="image-section">
                    <img src="images/image1.jpg" class="img-responsive img-circle" alt="Responsive image" width="320" height="320">
                </div>
                <div class="header">
                    <h1>Welcome</h1>
                </div>
                <p><strong>Please fill the data carefully. This form can change your life.</strong></p>
               
                <form class="form-horizontal" method="post">
 
  <div class="form-group mycus3">
   <a href="display.php" name="submit" class="btn btn-default mycus4"><strong>Check Form</strong></a>
  </div>
</form>
         </div>        
            </div>
        </div>
        <?php

include 'connection.php';
$idvar = $_GET['Id'];
$select = "select * from jobregistration1 where Id = $idvar";
$query = mysqli_query($connection, $select);
$arrayform = mysqli_fetch_array($query);            
            
            
if(isset($_POST['register'])){
    $idvar1 = $_GET['Id'];
    $name = $_POST['name'];
    $degree = $_POST['qualification'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $reference= $_POST['reference'];
    $jobpost = $_POST['job-post'];
    
//    $insertquery = "insert into  jobregistration1(Name,Degree,mobile,email, refer, jobpost) values('$name','$degree','$mobile','$email','$reference','$jobpost')";
    
    
    $update = "update jobregistration1 set Name = '$name',Degree = '$degree', mobile = '$mobile', email='$email', refer='$reference', jobpost= '$jobpost'  where Id = $idvar1 ";
    $finalquery = mysqli_query($connection,$update);
    
    if($finalquery){
        ?>
        <script>
            alert("data updated succesfully");

</script>
   <?php
    }else{
        ?>
        <script>
         alert("data are not updated");
        </script>
        <?php
    }
        
    
    
}




?>
        <div class="rightside">
            <div class="col-md-9 mycus2">
                <div class="center2">
                    <div class="header2">
                        <h1><strong>Apply For Web Developer Post</strong></h1>
                    </div>
                    <div class="content">
                        <form method="post">
                            <input type="text" name="name" placeholder="Enter your name" class="inputmycus" value="<?php echo $arrayform[1] ?>">
                            <input type="text" name="qualification" placeholder="enter your qualification" class="inputmycus" value="<?php echo $arrayform[2] ?>"> <br>
                            <input type="number" name="mobile" placeholder="mobile number" class="inputmycus" value="<?php echo $arrayform[3] ?>">
                            <input type="email" name="email" placeholder="email id" class="inputmycus" value="<?php echo $arrayform[4] ?>"> <br>
                            <input type="text" name="reference" placeholder="Any references" class="inputmycus" value="<?php echo $arrayform[5] ?>">
                            <input type="text" name="job-post" value="Web Developer" class="inputmycus"> <br>
                            <input type="submit" value="Update" name="register" class="btn btn-primary">
                            
                        </form>
                    </div>
                </div>
                
                
            </div>
        </div>
        </div>
        
        
        
        
        
        
        
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>CANDIDATE LIST</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">
	
	<table class="table table-striped table-bordered table-hover table-responsive">
     <thead>
         <tr>
             <th>ID</th>
             <th>NAME</th>
             <th>DEGREE</th>
             <th>MOBILE</th>
             <th>EMAIL</th>
             <th>REFER</th>
             <th>JOBPOST</th>
             <th colspan="2">OPERATION</th>
         </tr>
     </thead>
     <tbody>
        
         <?php
          include 'connection.php';

          $selection = "select * from jobregistration1";

          $query = mysqli_query($connection, $selection);



          while($res = mysqli_fetch_array($query)){
              
         ?>
         <tr>
             <td><?php echo $res[0] ?></td>
             <td><?php echo $res[1] ?></td>
             <td><?php echo $res[2] ?></td>
             <td><?php echo $res[3] ?></td>
             <td><?php echo $res[4] ?></td>
             <td><?php echo $res[5] ?></td>
             <td><?php echo $res[6] ?></td>
             <td><a href="updates.php?Id=<?php echo $res[0] ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
             <td><a href="delete.php?Id=<?php echo $res[0] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
             
              
            <?php  
              
          }




          ?>

        
        
        
        
     </tbody>
</table>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>

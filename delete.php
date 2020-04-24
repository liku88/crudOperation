<?php

include 'connection.php';
$ids1 = $_GET['Id'];
$deletefun = "delete from jobregistration1 where Id = $ids1 ";

$deletequery = mysqli_query($connection, $deletefun);

header('location:display.php');

?>
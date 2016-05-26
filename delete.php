<?php
//including the database connection file
include("config.php");

//getting id of the data from url
//deleting the row from table
//$id = $_GET['id'];
//$result = mysqli_query($conn,"DELETE FROM users WHERE id=$id");

/*$id = $_GET['id'];
$id= $_GET['id'];
$id_no = $_GET['ssc_id'];
$resultssc = mysqli_query($conn,"DELETE FROM ssc WHERE ssc_id=$id_no");
$resultinter = mysqli_query($conn,"DELETE FROM inter WHERE id=$id");
$resultgrad = mysqli_query($conn,"DELETE FROM graduation WHERE id=$id");*/

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

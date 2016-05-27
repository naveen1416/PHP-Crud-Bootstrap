<?php
//including the database connection file
include("config.php");
$id = $_GET['id'];

$resultg = mysqli_query($conn,"Delete  FROM graduation WHERE pid=$id");

$resulti = mysqli_query($conn,"Delete  FROM inter WHERE pid=$id");

$results = mysqli_query($conn,"Delete  FROM ssc WHERE pid=$id");


$result = mysqli_query($conn,"Delete FROM personal WHERE id=$id");

//$results = mysqli_query($conn, "SELECT * FROM ssc");
//$id = $_GET['id'];
//$resulti = mysqli_query($conn, "SELECT * FROM inter");
//$id = $_GET['id'];
//$resultg = mysqli_query($conn, "SELECT * FROM graduation");
//$id = $_GET['id'];



header("Location:index.php");
?>

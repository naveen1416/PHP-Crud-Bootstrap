

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body style="background-color:#f2f2f2">
<?php
//including the database connection file
include_once("config.php");
//print_r($_POST);exit();

if(isset($_POST['Submit'])){
  $name = $_POST['name'];
  $userid = $_POST['userid'];
  $dob= $_POST['dob'];
  $sex= $_POST['sex'];
  $address= $_POST['address'];
  $qualification= $_POST['qualification'];
  $certification =$_POST['certification'];
  
  $ssc_board =$_POST['ssc_board'];
  $ssc_year =$_POST['ssc_year'];
  $ssc_percentage =$_POST['ssc_percentage'];
  
  $inter_board= $_POST['inter_board'];
  $inter_year= $_POST['inter_year'];
  $inter_percentage= $_POST['inter_percentage'];
  $graduation_board =$_POST['graduation_board'];
  $graduation_year =$_POST['graduation_year'];
  $graduation_percentage =$_POST['graduation_percentage'];
  

	//if (!empty($result)) 
     // list is empty.

	$result = mysqli_query($conn ,"SELECT * FROM personal");
	
				$num_rows = mysqli_num_rows($result);

				echo "$num_rows Rows";

				if($num_rows == 0)
				{
					$id=1;
				}
				else
				{
					$id=$num_rows+1;
				}
	$query="INSERT INTO personal(id,name,userid,dob,sex,address,qualification,certification)
	VALUES('$id','$name','$userid','$dob','$sex','$address',$qualification,'$certification')";
	$result = mysqli_query($conn,$query);
	
	$results = mysqli_query($conn ,"SELECT * FROM ssc");	
	$querys ="INSERT INTO ssc(pid,ssc_board,ssc_year,ssc_percentage) 
	VALUES('$id','$ssc_board','$ssc_year','ssc_percentage')";
	$results = mysqli_query($conn,$querys);
	
	$resulti = mysqli_query($conn,"SELECT * FROM inter");
	$queryi ="INSERT INTO inter(pid,inter_board,inter_year,inter_percentage) 
	VALUES('$id','$inter_board','$inter_year','$inter_percentage')";
	$resulti = mysqli_query($conn,$queryi);
	
	$resultg = mysqli_query($conn, "SELECT * FROM graduation");
	$queryg = "INSERT INTO graduation(pid,graduation_board,graduation_year,graduation_percentage) 
	VALUES('$id','$graduation_board','$graduation_year','$graduation_percentage')";
	$resultg = mysqli_query($conn,$queryg);
}
var_dump($result);
//header("Location:index.php");
?>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	  <!-- jQuery Form Validation code -->

  </body>
</html>
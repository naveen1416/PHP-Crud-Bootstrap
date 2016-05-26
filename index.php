
<?php
//including the database connection file
//include_once("config.php");

//fetching data in descending order (lastest entry first)

//$result = mysqli_query($conn ,"SELECT * FROM users");



?>
<!DOCTYPE html>
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
    
<div class="container">
	<!--PANEL START!-->
	<div class="row">
	 
		<div class="col-md-12">
			<div class="card-panel">
				<div class="col-md-12">
					<h3 class="text-info m-t-0">Personal Details</h3>
				</div>
				<div class="col-md-5" style="margin-bottom:5px;">
					<a href="add.php"> <button type="submit"  class="btn btn-info">Add <span class="glyphicon glyphicon-plus" aria-hidden="true"></button></a>
				</div>
				<div class="table table-responsive">
					<table class="table table-bordered table-hover m-t-15">
						<thead>
						  <tr class="info">
							<th>Name</th>
							<th>Id</th>
							<th>DOB</th>
							<th>Sex</th>
							<th>Address</th>
							<th>Qualification</th>
							<th>certifications</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>
							<tr>
								<td>
								</td>
							</tr>
						 
						</tbody>
					 </table>
				</div>
				
			</div>
		
		</div><!--end row!-->
	</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	 <script>
		function myFunction() {
			alert("are you sure!");
			
		}
	</script>
	  
  </body>
</html>
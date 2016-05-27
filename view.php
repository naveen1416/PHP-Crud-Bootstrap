
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)


//$result = mysqli_query($conn ,"SELECT * FROM personal");
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM personal WHERE id=$id");

//$results = mysqli_query($conn, "SELECT * FROM ssc");
//$id = $_GET['id'];
$results = mysqli_query($conn,"SELECT * FROM ssc WHERE pid=$id");


//$resulti = mysqli_query($conn, "SELECT * FROM inter");
//$id = $_GET['id'];
$resulti = mysqli_query($conn,"SELECT * FROM inter WHERE pid=$id");

//$resultg = mysqli_query($conn, "SELECT * FROM graduation");
//$id = $_GET['id'];
$resultg = mysqli_query($conn,"SELECT * FROM graduation WHERE pid=$id");

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
	<style>
	li{
		
		font-weight:600;
	}
	span{
		font-weight:400;
		
	}
	</style>
  </head>
 
<body style="background-color:#f2f2f2">
    
<div class="container">
	<!--PANEL START!-->
	<div class="row">
	 
		<div class="col-md-8 col-md-offset-2">
			<div class="card-panel-x">
				<!--<div class="col-md-12">
					<h3 class="text-info m-t-0">Personal Details</h3>
				</div>-->
					 
					
						
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="page-title">Users</h3>
							</div>
							<div class="panel-body">
								
								<?php
									 if(!empty($result))
									 {
										 
									while($res = mysqli_fetch_array($result)) { 
									//print_r($res);
									
									  ?>
									  <ul class="list-group">
										<li class="list-group-item">                                            
                                           Name:
											<span class="text-primary"><?php echo $res['name'];?></span>
                                        </li>
										<li class="list-group-item">
                                            
                                            UserId:
											<span class="text-primary"><?php echo $res['userid'];?></span>
                                        </li>
                                        <li class="list-group-item">
                                            
                                           Date Of Birth:
										   <span class="text-primary"><?php echo $res['dob'];?></span>
                                        </li>
                                        <li class="list-group-item">
                                            
                                           Gender:
										   <span class="text-info"><?php echo $res['sex'];?></span>
                                        </li>
                                        <li class="list-group-item">
                                            
                                            Address:
											<span class="text-primary"><?php echo $res['address'];?></span>
                                        </li>
										<li class="list-group-item">
                                            
                                            Qualification:
											<span class="text-primary"><?php echo $res['qualification'];?></span>
                                        </li> 
										<li class="list-group-item">
                                            
                                            Certification:
											<span class="text-primary"><?php echo $res['certification'];?></span>
                                        </li>
									</ul>
									<?php
									  
									}
											}
											//print_r($result);
											//exit();
										
								   ?>
                                                                       
                                   
							</div>
							<div class="panel-body col-md-4">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr class="info">									
											<th colspan="2">ssc	</th>																	
										</tr>
										<?php
										if(!empty($results)){
											while($res1 = mysqli_fetch_array($results))
											{
											?>
										<tr>
											<td><strong>Type</strong></td>
											<td><?php echo $res1['ssc_board']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Year</strong></td>	
											<td><?php echo $res1['ssc_year']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Percentage</strong></td> 
											<td><?php echo $res1['ssc_percentage']; ?></td>
																							
										</tr>
										<?php
											}
										}
										?>
									</thead>
								</table>
							</div>
								
							</div>
							<div class="panel-body col-md-4">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr class="info">									
											<th colspan="2">inter</th>																	
										</tr>
										<?php
										if(!empty($resulti)){
											while($res2 = mysqli_fetch_array($resulti))
											{
											?>
										<tr>
											<td><strong>Type</strong></td>
											<td><?php echo $res2['inter_board']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Year</strong></td>	
											<td><?php echo $res2['inter_year']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Percentage</strong></td> 
											<td><?php echo $res2['inter_percentage']; ?></td>
																							
										</tr>
										<?php
											}
										}
										?>
									</thead>
								</table>
							</div>
								
							</div>
							<div class="panel-body col-md-4">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr class="info">									
											<th colspan="2">inter</th>																	
										</tr>
										<?php
										if(!empty($resultg)){
											while($res3 = mysqli_fetch_array($resultg))
											{
											?>
										<tr>
											<td><strong>Type</strong></td>
											<td><?php echo $res3['graduation_board']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Year</strong></td>	
											<td><?php echo $res3['graduation_year']; ?></td>
																					
										</tr>
										<tr>
											<td><strong>Percentage</strong></td> 
											<td><?php echo $res3['graduation_percentage']; ?></td>
																							
										</tr>
										<?php
											}
										}
										?>
									</thead>
								</table>
							</div>
								<a href="index.php"><button class="btn btn-success pull-right">Back</button></a>
							</div>
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
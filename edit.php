<?php
// including the database connection file
include_once("config.php");


if(isset($_POST['update']))
{
	
//print_r($_POST);exit;

	$id = $_POST['id'];
	
	$name = $_POST['name'];
	$userid = $_POST['userid'];
	$dob = $_POST['dob'];
	$sex = $_POST['sex'];
	$address =$_POST['address'];
	$qualalification =$_POST['qualalification'];
	$certification =$_POST['certification'];
	
	
	$ssc_board =$_POST['ssc_board'];
	$ssc_year =$_POST['ssc_year'];
	$ssc_percentage =$_POST['ssc_percentage'];
	
	$inter_board =$_POST['inter_board'];
	$inter_year =$_POST['inter_year'];
	$inter_percentage =$_POST['inter_percentage'];
	
	$garduation_board=$_POST['garduation_board'];
	$garduation_year=$_POST['garduation_year'];
	$garduation_percentage=$_POST['garduation_percentage'];
	
		//updating the table
		 $query = "UPDATE users SET name='".$_POST['name']."',userid='".$userid."',dob='".$dob."',sex='".$sex."',address='".$address."',
		qualification='".$qualification."',certification='".$certification."' WHERE id=".$id;
		
		$result = mysqli_query($conn,$query);
		
		
		
		$queryssc=("UPDATE ssc SET ssc_board='$ssc_board',ssc_year='$ssc_year',ssc_percentage='$ssc_percentage'; WHERE pid=$id");		
		$resultssc=mysqli_query($conn,$queryssc);
		
		$queryinter=("UPDATE inter SET inter_board='$inter_board',inter_year='$inter_year',inter_percentage='$inter_percentage'; WHERE pid=$id");
		$resultinter=mysqli_query($conn,$queryinter);
		
		$querygraduation=("UPDATE graduation SET garduation_board='$garduation_board',garduation_year='$garduation_year',garduation_percentage='$garduation_percentage'; WHERE pid=$id");
		$resultgraduation=mysqli_query($conn,$querygrad);
		
		//redirectig to the display page. In our case, it is index.php
		
	header("Location:index.php");
}
?>
<?php
//getting id from url

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$result = mysqli_query($conn,"SELECT * FROM personal WHERE '".$id."'");


/*$results = mysqli_query($conn,"SELECT * FROM ssc WHERE pid=$id");



$resulti = mysqli_query($conn,"SELECT * FROM inter WHERE pid=$id");


$resultg = mysqli_query($conn,"SELECT * FROM graduation WHERE pid=$id");*/



//$result = mysqli_query($conn ,"SELECT * FROM personal");

if(!empty($result)){

while($res = mysqli_fetch_array($result))
{
	
	$name = $res['name'];
	$userid = $res['userid'];
	$dob = $res['dob'];
	$sex = $res['sex'];
	$address = $res['address'];
	$qualification = $res['qualification'];
	$certification = $res['certification'];
	
	$ssc_board =$res['ssc_board']; $ssc_year =$res['ssc_year']; $ssc_percentage =$res['ssc_percentage'];
	
	$inter_board =$res['inter_board']; $inter_year =$res['inter_year']; $inter_percentage=$res['inter_percentage'];
	
	$graduation_board =$res['graduation_board'];
	$graduation_year =$res['graduation_year'];
	$graduation_percentage =$res['graduation_percentage'];
		
}
}

?>
			
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

 
  </head>
 
  <body style="background-color:#f2f2f2">
    
<div class="container">
	<!--PANEL START!-->
	<div class="row">
	
	<div class="panel panel-info m-t-15">
		<div class="panel-heading"><span ><h3 class="text-info" align="center"><b>Add Details</b></h3></span></div>
		<div class="panel-body">
		<form class="form-horizontal col-md-offset-2" onsubmit="return validateForm()" action="edit.php" method="post" name="form1">
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="name"  >Name<span class="span-text">*</span></label>
			  <div class="col-sm-6">
				<input type="text" class="form-control" id="name" name="username"   placeholder="Enter Name" value="<?php echo $name;?>" >
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ID">ID<span class="span-text">*</span></label>
			  <div class="col-sm-6">          
				<input type="text" class="form-control" id="ID" placeholder="Enter Id No" name="userid">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ID">Date Of Birth<span class="span-text">*</span></label>
			  <div class="col-sm-6">          
				<input type="text" class="form-control" id="datepicker" placeholder="Select Date" name="dob" />
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ID">Sex<span class="span-text">*</span></label>
				<div class="col-sm-6">
				  <label class="radio-inline">
					  <input type="radio" name="sex" id="idsex_male" value="M" checked>Male
				  </label>
					<label class="radio-inline">
					  <input type="radio" name="sex" id="idsex_female" value="F" >Female
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Addr">Address<span class="span-text">*</span></label>
				<div class="col-sm-6">
				<textarea class="form-control" id="Addr" name="useraddr" placeholder="fill address" ></textarea>
				</div>
			</div>
			<div class="form-group">
			 <label class="control-label col-sm-2" for="sel2">Qualification<span class="span-text">*</span></label>
			 <div class="col-sm-6">
				  <select class="form-control" id="sel2" name="userqual">					
					<option>S.S.C</option>
					<option>Intermediate</option>
					<option>Bachelors</option>
					<option>Master</option>
					<option>Ph.D</option>
				  </select>
			  </div>
			</div>
			<div class="form-group">
			 <label class="control-label col-sm-2" for="sel2">Certifications<span class="span-text">*</span></label>
			 <div class="col-sm-6">
			  <select multiple class="form-control" id="sel3" name="usercert">
				<option>Certifications</option>
				<option>AGILE</option>
				<option>SCRUM</option>
				<option>ISTQB</option>
				<option>HTML5</option>
			  </select>
			  </div>
			</div>
			
			<div class="col-md-8" style="border:1px solid silver;border-radius:3px; margin-bottom:10px;">
				<b class="text-success col-md-offset-5"><h4 class="col-md-offset-5">Acedamic Info</h4></b>
				
				<div class="">
					<div class="form-group">
					  <label class="control-label col-sm-2" for="ssc">SSC<span class="span-text">*</span></label>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="ssc" name="school" placeholder="SSC">
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="school1" id="year">
							<option>Select Year</option>
							<?php 
								for($year=1977; $year<= 2016; $year ++)
								{
									echo "<option value='".$year."'>".$year."</option>";
						       }
							?>
						</select>
					  </div>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="sscp" name="school2" placeholder="Enter %">
					  </div>
					</div>
				
					<div class="form-group">
					  <label class="control-label col-sm-2" for="inter">Intermediate<span class="span-text">*</span></label>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="inter" name="inter1" placeholder="Intermediate">
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="inter2" id="colg">
							<option>Select Year</option>
							<?php 
								for($year=1977; $year<= 2016; $year ++)
								{
									echo "<option value='".$year."'>".$year."</option>";
						       }
							?>
						</select>
					  </div>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="inter1" name="inter3" placeholder="Enter %">
					  </div>
					</div>
				
					<div class="form-group">
					  <label class="control-label col-sm-2" for="inter">Graduation<span class="span-text">*</span></label>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="Graduation" name="grad1" placeholder="Graduation">
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="grad2" id="Graduation1">
							<option>Select Year</option>
							<?php 
								for($year=1977; $year<= 2016; $year ++)
								{
									echo "<option value='".$year."'>".$year."</option>";
						       }
							?>
						</select>
					  </div>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="Graduation2" name="grad3" placeholder="Enter %">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group"> 
			<div class="col-sm-8" align="right">
				<button type="reset" class="btn btn-danger">Reset</button>
				<button  class="btn btn-primary" onclick="javascript:window.location='index.php'">Back</button>
				<button type="submit" class="btn btn-success" name="update" value="update">Submit</button>
			</div>
		
			</div>
			
		</form>
		
		</div>
	 </div> 
			<!--PANEL END!-->
			</div><!--end row!-->
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	  <!-- jQuery Form Validation code -->
	  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
	<script>
		function validateForm() {
			var x = document.forms["form1"]["name"].value;
			if (x == null || x == "") {
				alert("Name must be filled out");
				 document.getElementById("name").focus();
				return false;
			}
			var x = document.forms["form1"]["ID"].value;
			if (x == null || x == "") {
			alert("id must be filled out");
			 document.getElementById("ID").focus();
			return false;
				}
				var x = document.forms["form1"]["datepicker"].value;
			if (x == null || x == "") {
			alert("dob must be filled out");
			 document.getElementById("datepicker").focus();
			return false;
				}
				var x = document.forms["form1"]["male"].value;
			if (x == null || x == "") {
			alert("dob must be filled out");
			 document.getElementById("male").focus();
			return false;
				}
				var x = document.forms["form1"]["Addr"].value;
			if (x == null || x == "") {
			alert("Address must be filled out");
			 document.getElementById("Addr").focus();
			return false;
				}
		}
	</script>
	

  </body>
</html>

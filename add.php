

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
	
	<div class="panel panel-info m-t-15">
		<div class="panel-heading"><span ><h3 class="text-info" align="center"><b>Add Details</b></h3></span></div>
		<div class="panel-body">
		<form class="form-horizontal col-md-offset-2" onsubmit="return validateForm()" action="form.php" method="post" name="form1">
			<div class="form-group">
			
				  <label class="control-label col-sm-2" type="name" for="name" >Name<span class="span-text">*</span></label>
				  <div class="col-sm-6">
					<input type="text" class="form-control" id="" name="name"   placeholder="Enter Name" required>
				  </div>
				  
			</div>
			<div class="form-group">
				  <label class="control-label col-sm-2" for="ID">ID<span class="span-text">*</span></label>
				  <div class="col-sm-6">          
					<input type="text" class="form-control" id="userid" placeholder="Enter Id No" name="userid" required>
				  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ID">Date Of Birth<span class="span-text">*</span></label>
			  <div class="col-sm-6">          
				<input type="text" class="form-control" id="datepicker" placeholder="Select Date" name="dob" required />
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ID">Sex<span class="span-text">*</span></label>
				<div class="col-sm-6">
				  <label class="radio-inline">
					  <input type="radio" name="sex" id="idsex_male" value="M" required>Male
				  </label>
					<label class="radio-inline">
					  <input type="radio" name="sex" id="idsex_female" value="F" required >Female
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Addr">Address<span class="span-text">*</span></label>
				<div class="col-sm-6">
				<textarea class="form-control" id="Addr" name="address" placeholder="fill address" required ></textarea>
				</div>
			</div>
			<div class="form-group">
			 <label class="control-label col-sm-2" for="sel2">Qualification<span class="span-text">*</span></label>
			 <div class="col-sm-6">
				  <select class="form-control" id="sel2" name="qualification" required>					
					<option></option>
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
			  <select multiple class="form-control" id="sel3" name="certification" required>
				<option></option>
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
						<input type="text" class="form-control" id="ssc" name="ssc_board" placeholder="SSC" required>
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="ssc_year" id="year" required>
							<option></option>
							<?php 
								for($year=1977; $year<= 2016; $year ++)
								{
									echo "<option value='".$year."'>".$year."</option>";
						       }
							?>
						</select>
					  </div>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="" name="ssc_percentage" placeholder="Enter %" required>
					  </div>
					</div>
				
					<div class="form-group">
					  <label class="control-label col-sm-2" for="inter">Intermediate<span class="span-text">*</span></label>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="inter" name="inter_board" placeholder="Intermediate" required>
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="inter_year" id="colg" required>
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
						<input type="text" class="form-control" id="" name="inter_percentage" placeholder="Enter %" required>
					  </div>
					</div>
				
					<div class="form-group">
					  <label class="control-label col-sm-2" for="inter">Graduation<span class="span-text">*</span></label>
					  <div class="col-sm-3">          
						<input type="text" class="form-control" id="Graduation" name="graduation_board" placeholder="Graduation" required>
					  </div>
					  <div class="col-sm-3">          
						<select class="form-control" name="graduation_year" id="Graduation1">
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
						<input type="text" class="form-control" id="Graduation2" name="graduation_percentage" placeholder="Enter %" required>
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group"> 
			<div class="col-sm-8" align="right">
				<button type="reset" class="btn btn-danger">Reset</button>
				<button  class="btn btn-primary" onclick="javascript:window.location='index.php'">Back</button>
				<button type="submit" class="btn btn-success" name="Submit" value="Add">Submit</button>
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
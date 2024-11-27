<?php

include('header.php');
include('navbar.php');

?>

<style type="text/css">
	
#second,#third,#fourth{
	display: none;
}


</style>

<body style="background-color: green;">

<div class="container">

<div class="row justify-content-center">
	
<div class="col-md-6 bg-light p-4 rounded mt-5 mb-3">
	<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">NASC Application Portal</h5>

	<div class="progress mb-3" style="height:40px;">
<div class="progress-bar bg-danger" role="progressbar" style="width:2%;"  id="pb">
	<b class="lead" id="progressText">Step -1</b>
</div>	
</div>
<form action="#" method="POST" id="form-data" enctype="multipart/form-data">
	<div id="first">
		<h4 class="text-center bg-primary p-1 rounded text-light">Personal Information</h4>
		<div class="form-group">
		<label for="first_name">First Name</label>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">	
		<b class="form-text text-danger" id="fnameError"></b>
		</div>

		<div class="form-group">
		<label for="name">Middle Name</label>
		<input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name">	
		<b class="form-text text-danger" id="mnameError"></b>
		</div>

		<div class="form-group">
		<label for="name">Last Name</label>
		<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">	
		<b class="form-text text-danger" id="lnameError"></b>
		</div>

		<!-- <div class="form-group">
		<label for="name">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username" id="username">	
		<b class="form-text text-danger" id="usernameError"></b>
		</div> -->
		<div class="d-grid gap-2">
		<a href="#" class=" btn btn-danger" id="next-1">Next</a>
		</div>



	</div>

		<div id="second">
		<h4 class="text-center bg-primary p-1 rounded text-light">Contact Information</h4>
		<div class="form-group">
		<input type="email" name="email" class="form-control" placeholder="Email" id="email">	
		<b class="form-text text-danger" id="emailError"></b>
		</div>

		<div class="form-group">
		<label for="gender">Gender:&nbsp;</label>
		<label for="male">Male</label>&nbsp;<input type="radio" name="gender" value="male">&nbsp;&nbsp;
		<label for="female">Female</label>&nbsp;<input type="radio" name="gender" value="female">	
		<b class="form-text text-danger" id="genderError"></b>
		</div>

		<div class="form-group">
		<input type="tel" name="phone1" class="form-control" placeholder="Valid Phone Number I" id="phone1">	
		<b class="form-text text-danger" id="phoneIError"></b>
		</div>

		<div class="form-group">
		<input type="tel" name="phoneII" class="form-control" placeholder="Valid Phone NumberII">	
		<b class="form-text text-danger" id="phoneIIError"></b>
		</div>
		
		<div class="form-group">
		<input type="text" name="state" class="form-control" placeholder="State of Origin" id="state">	
		<b class="form-text text-danger" id="stateError"></b>
		</div>
		
		<div class="form-group">
		<input type="text" name="lga" class="form-control" placeholder="LGA" id="lga">	
		<b class="form-text text-danger" id="lgaError"></b>
		</div>








		
		<div class="d-grid gap-2">

		<a href="#" class=" btn btn-danger" id="prev-2">Previous</a>

		<a href="#" class=" btn btn-success" id="next-2">Next</a>
		</div>



	</div>


	<div id="third" class="form-group">
		<h4 class="text-center bg-primary p-1 rounded text-light">Position Applied For:</h4>
		<!--<label for="position_applied">Position Applied</label> <br />-->
		
		<!--<label for="med_lab_sci">Medical Lab. Scientist</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Medical Lab Scientist">&nbsp;&nbsp; <br />-->
		<!--<hr />-->
		
		<!--<label for="int_nurse">Intern Nurse</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Nurse"> <br />-->
		
		<!--<hr />-->
		
		<!--	<label for="int_pharm">Intern Pharmacist</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Pharmacist"> <br />-->
		
		<!--<hr />-->
		
		<!--<label for="int_radiographer">Intern Radiographer</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Radiographer"> <br />-->
		
		<!--<hr />-->
		
		<!--	<label for="int_dent_ther">Intern Dental Therapist</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Dental Therapist"> <br />-->
		
		<!--<hr />-->
		
		<!--	<label for="int_dent_tech">Intern Dental Technologist</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Dental Technologist"> <br />-->
		<!--<hr />-->
		
		<!--	<label for="int_dent_opt">Intern Optometrist</label>&nbsp;-->
		<!--<input type="radio" name="position" value="Intern Optometrist"> <br />-->
		
		
		
		
		
		
		<!--<select name="postion" id="position" class="form-control" required>-->
		<!--	<option value="" class="form-control">-- Select ---</option>-->
		<!--	<option value="Intern Pharmacist" class="form-control">Intern Pharmacist</option>-->
		<!--	<option value="Medical Lab Scientist" class="form-control">Intern Medical Lab. Scientist</option>-->
		<!--	<option value="Intern Nurse" class="form-control">Intern Nurse</option>-->
		<!--	<option value="Intern Radiographer" class="form-control">Intern Radiographer</option>-->
		<!--	<option value="Intern Dental Therapist" class="form-control">Intern Dental Therapist</option>-->
		<!--	<option value="Intern Dental Technologist" class="form-control">Intern Dental Technologist</option>-->
		<!--	<option value="Intern Optometrist" class="form-control">Intern Optometrist</option>-->

		<!--</select>-->
		<!--<b class="form-text text-danger" id="positionError"></b>-->

		<!--<br>-->
		
		
				<div class="form-group">
		<select name="position" id="position" class="form-control">
			<option value="">--Position Applied For--</option>
			<option value="Admin Officer" name="position">Admin Officer</option>
			<option value="Clerical Officer" name="position">Clerical Officer</option>
			<option value="Senior Clerical Officer" name="position">Senior Clerical Officer</option>
			<option value="Principal Admin Officer" name="position">Principal Admin Officer</option>
			
		</select>
		<b class="form-text text-danger" id="positionError"></b>
		</div>
		
	
		<label>Upload Degree Certificate</label>
		<span class="danger"><p>* Only JPG,JPEG,PNG Allowed</p></span>
		<span class="danger"><p>* Max file Size is 150 KB</p></span>
		<input type="file" id="certificate" accept="image/png, image/jpeg" name="certificate" class="form-control" required>
		<b class="form-text text-danger" id="certificateError"></b>

		
		<div class="form-group">
		<div class="d-grid gap-2">

		<a href="#" class=" btn btn-danger" id="prev-3">Previous</a>

		<a href="#" class=" btn btn-success" id="next-3">Next</a>
		</div>



	</div>




	</div>	
	
	<div id="fourth" class="form-group">
		<h4 class="text-center bg-primary p-1 rounded text-light">CV and Certificate Upload:</h4>


		<label>Upload CV</label><br>
		<span class="danger"><p>* Only PDF Allowed</p></span>
			<span class="danger"><p>* Max file Size is 2MB</p></span>
		<input type="file" accept="application/pdf" id="license" name="cv" class="form-control" required>
	
		<hr>
			<label>Upload Other Certificate</label><br>
		<span class="danger"><p>* Only JPG,JPEG,PNG Allowed</p></span>
			<span class="danger"><p>* Max file Size is 150 KB</p></span>
		<input type="file" id="induction" name="other" accept="image/png, image/jpeg" class="form-control" required>
		
		
		




		
		
		<div class="form-group">
		<div class="d-grid gap-2 mt-2">
		<a href="#" class=" btn btn-danger" id="prev-4">Previous</a>

		<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" />
		</div>



	</div>





</form>


</div>




</div>




	
</div>




<script type="text/javascript">
	$(document).ready(function(){
	
	


		$('#next-1').click(function(e){


		e.preventDefault();
		$('#fnameError').html('');
		$('#lnameError').html('');
		// $('#usernameError').html('');


    if($('#fname').val() == ''){
	$('#fnameError').html(' * First Name is Required');
	return false;
    } else if($('#fname').val().length < 3){
    	$('#fnameError').html(' * Name Must Be Of Atleast 3 Characters');
		return false;
    } 

    else if(!isNaN($('#fname').val())){
    	$('#fnameError').html(' * Name Must Be Alphabets');
		return false;
    }

    else if($('#lname').val() == ''){
    	$('#lnameError').html(' * Last Name Cant Be Empty');
    	return false;
    }

    else if($('#lname').val().length < 3){
    	$('#lnameError').html(' * Name Must Be Of Atleast 3 Characters');
		return false;
    } 


     else if(!isNaN($('#lname').val())){
    	$('#lnameError').html(' * Name Must Be Alphabets');
		return false;
    }


else{

	$('#second').show();
	$('#first').hide();
	$('#pb').css('width','25%');
	$('#progressText').html('Step - 2');



}

		

	

	});







	$('#next-2').click(function(e){

	e.preventDefault();

var gender = $("input[name='gender']:checked").val();


	$('#emailError').html('');
	$('#genderError').html('');
	$('#phoneIError').html('');
	$('#stateError').html('');
	$('#lgaError').html('');
	if($('#email').val() == ''){
	$('#emailError').html('* Email Cannot Be Empty');
	return false;
}	

else if(!validateEmail($('#email').val())){
	$('#emailError').html('* Email is Invalid');
	return false;
}
else if(!gender){
	$('#genderError').html('* Select Gender');
	return false;
}
else if($('#phone1').val() == ''){
	$('#phoneIError').html('* Phone Number Cannot Be Empty');
	return false;
}	
else if(!validatePhone($('#phone1').val())){
	$('#phoneIError').html('* Phone number is invalid');
	return false;
}

else if($('#state').val() == ''){
	$('#stateError').html('* Enter Your State');
	return false;
}

else if($('#lga').val() == ''){
	$('#lgaError').html('* Enter Your LGA');
	return false;
}





	maxFileSize = 0.5 * 1024 * 1024;

	function validateEmail($email){
		var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		return emailReg.test($email);
	}

		function validatePhone($phone){
		var phoneReg = /^[0][7-9][0-1][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/;
		return phoneReg.test($phone);
	}


	




		$('#third').show();
		$('#second').hide();
		$('#pb').css('width','75%');
		$('#progressText').html('Step - 3');

	});

$('#next-3').click(function(e){

e.preventDefault();

// var position = $("input[name='position']:checked").val();
// $('#titleError').html('');

$('#positionError').html('');

// if(!position){
// 	$('#positionError').html('* Select Position');
// 	return false;
// }

  if($('#position').val() == ''){
		$('#positionError').html(' * Position Must Be Selected');
		return false;
	}
	
  if($('#certificate').val() == ''){
		$('#certificateError').html(' * Attach Certificate');
		return false;
	}



// if($('#position').val() == ''){
// 	$('#positionError').html('* Select position');
// 	return false;

// }


	$('#fourth').show();
	$('#third').hide();
	$('#pb').css('width','100%');
	$('#progressText').html('Step - 4');

});










$('#form-data').submit(function(e){
	e.preventDefault();
	$('#progressText').html('Submitting....');
	$.ajax({
		url:'action.php',
		method:'POST',
		data:new FormData(this),
		contentType: false,
		processData: false,
		success:function(response){
		   
			$('#result').show();
			$('#result').html(response);
			$('#form-data')[0].reset();
			$('#progressText').html(response);
			
		}
	});

});






	$('#prev-2').click(function(){
		$('#second').hide();
		$('#first').show();
		$('#pb').css('width','25%');
		$('#progressText').html('Step - 1');

	});

	$('#prev-3').click(function(){
		$('#third').hide();
		$('#second').show();
		$('#pb').css('width','45%');
		$('#progressText').html('Step - 2');

	});

	$('#prev-4').click(function(){
		$('#fourth').hide();
		$('#third').show();
		$('#pb').css('width','75%');
		$('#progressText').html('Step - 3');

	});


});
</script>







	
</body>




<?php
include('footer_10.php');
?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
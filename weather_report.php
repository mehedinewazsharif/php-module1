<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weather Report</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class="container py-5">
	<div class="text-center mb-5">	
		<a class="btn btn-primary" href="personal_info.php">Task 1</a>
		<a class="btn btn-primary" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-primary" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-primary" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-success" href="weather_report.php">Task 5</a>
		<a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>

	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 5: Weather Report</h1>

<?php
	if(isset($_POST['Submit'])){

		// Temperature range thresholds
		$freezingTemperature = 0;
		$coolTemperature = 15;
		$warmTemperature = 25;


		$temperature = $_POST['temperature'];

		if ($temperature <= $freezingTemperature) {
		  echo "<div class=\"text-secondary mb-3 fs-5\">It's freezing!</div>";
		} elseif ($temperature <= $coolTemperature) {
		  echo "<div class=\"text-primary mb-3 fs-5\">It's cool.</div>";
		} else {
		  echo "<div class=\"text-danger mb-3 fs-5\">It's warm.</div>";
		}
	}
?>




<?php
/*
	$temperature = 25; 

	if ($temperature <= 0) {
	    echo "<p class=\"fs-4\"><span class=\"badge text-bg-primary\">It's freezing!</span></p>";
	} elseif ($temperature <= 15) {
	    echo "<p class=\"fs-4\"><span class=\"badge text-bg-primary\">It's cool.</span></p>";
	} else {
	    echo "<p class=\"fs-4\"><span class=\"badge text-bg-primary\">It's warm.</span></p>";
	}
*/
?>


<form method="post">
	<div class="mb-3">
  		<input type="text" name="temperature" placeholder="Temperature in degrees" class="form-control">
  	</div>
  <input type="submit" name="Submit" value="Get Weather Report" class="btn btn-primary">
</form>





	</div> 	
</div> 

	</div> 
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
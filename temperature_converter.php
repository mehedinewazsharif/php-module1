<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Temperature Converter</title>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class="container py-5">
	<div class="text-center mb-5">	
		<a class="btn btn-primary" href="personal_info.php">Task 1</a>
		<a class="btn btn-success" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-primary" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-primary" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-primary" href="weather_report.php">Task 5</a>
		<a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>

	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 2: Temperature Converter</h1>



<?php
	if (isset($_POST['convert'])) {

	    $temperature = floatval($_POST['temperature']);
	    $conversion = $_POST['conversion'];
	    
	    if ($conversion == 'celsius_to_fahrenheit') {
	        $converted_temperature = ($temperature * 9/5) + 32;
	        echo "<div class=\"text-primary mb-3 fs-5\"><span class=\"text-dark\">{$temperature}°C</span> is equal to <span class=\"text-dark\">{$converted_temperature}°F</span></div>";
	    } elseif ($conversion == 'fahrenheit_to_celsius') {
	        $converted_temperature = ($temperature - 32) * 5/9;
	        echo "<div class=\"text-primary mb-3 fs-5\"><span class=\"text-dark\">{$temperature}°F</span> is equal to <span class=\"text-dark\">{$converted_temperature}°C</span></div>";

	    }
	}
?>


 
<form method="post">

	<div class="mb-3">
        <label for="temperature" class="form-label">Enter Temperature</label>
        <input type="number" name="temperature" class="form-control" id="temperature" required>
    </div>


	<div class="mb-3">
	    <label for="conversion" class="form-label">Select Conversion</label>
	    <select name="conversion" id="conversion" class="form-select" required>
	        <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
	        <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
	    </select>
	</div>


    <input type="submit" name="convert" value="Convert" class="btn btn-primary">
</form>


	</div>
</div>

	</div>    
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
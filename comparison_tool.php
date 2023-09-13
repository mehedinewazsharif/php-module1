<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comparison Tool</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class="container py-5">
	<div class="text-center mb-5">	
		<a class="btn btn-primary" href="personal_info.php">Task 1</a>
		<a class="btn btn-primary" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-primary" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-primary" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-primary" href="weather_report.php">Task 5</a>
		<a class="btn btn-success" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>


	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 6: Comparison Tool</h1>


<?php
	if (isset($_POST['compare'])) {
	    $number1 = intval($_POST['number1']);
	    $number2 = intval($_POST['number2']);
	    
	    $larger_number = ($number1 > $number2) ? $number1 : $number2;
	    
	    echo "<div class=\"text-primary mb-3 fs-5\">The larger number is: <span class=\"text-dark\">{$larger_number}</span></div>";
	}
?>



<form method="post">
	<div class="mb-3">
		<label for="number1">Enter the first number</label>
        <input type="number" name="number1" id="number1" class="form-control" required>
 	</div> 
	<div class="mb-3">	      
        <label for="number2">Enter the second number</label>
        <input type="number" name="number2" id="number2" class="form-control" required>
    </div>    
        <input type="submit" name="compare" value="Compare" class="btn btn-primary">

</form>





	</div> 	
</div> 

	</div> 
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
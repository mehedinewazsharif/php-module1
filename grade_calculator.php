<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade Calculator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class="container py-5">
	<div class="text-center mb-5">
		<a class="btn btn-primary" href="personal_info.php">Task 1</a>
		<a class="btn btn-primary" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-success" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-primary" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-primary" href="weather_report.php">Task 5</a>
		<a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>

	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 3: Grade Calculator</h1>


<?php
	if (isset($_POST['calculate'])) {

	    $test1 = floatval($_POST['test1']);
	    $test2 = floatval($_POST['test2']);
	    $test3 = floatval($_POST['test3']);
	    
	    $average = ($test1 + $test2 + $test3) / 3;
	    

	    $letter_grade = '';
	    if ($average<=100 && $average >= 90) {
	        $letter_grade = 'A';
	    } elseif ($average<90 && $average >= 80) {
	        $letter_grade = 'B';
	    } elseif ($average<80 && $average >= 70) {
	        $letter_grade = 'C';
	    } elseif ($average<70 && $average >= 60) {
	        $letter_grade = 'D';
	    } else {
	        $letter_grade = 'F';
	    }
	    

        echo "<div class=\"text-primary fs-5\">Average Score: <span class=\"text-dark\">{$average}</span></div>";

        echo "<div class=\"text-primary mb-3 fs-5\">Letter Grade: <span class=\"text-dark\">{$letter_grade}</span></div>";

	}
?>


    
<form method="post" action="">
	<div class="mb-3">
	    <label for="test1" class="form-label">Score 1</label>
	    <input type="number" name="test1" id="test1" class="form-control" required  max="100" min="0">
	</div>
    <div class="mb-3">
	    <label for="test2" class="form-label">Score 2</label>
	    <input type="number" name="test2" id="test2" class="form-control" required max="100" min="0">
	</div>
    <div class="mb-3">
	    <label for="test3" class="form-label">Score 3</label>
	    <input type="number" name="test3" id="test3" class="form-control" required max="100" min="0">
    </div>
    <input type="submit" name="calculate" value="Calculate" class="btn btn-primary">
</form>



	</div> 	
</div> 

	</div> 
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Even or Odd Checker</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class="container py-5">
	<div class="text-center mb-5">	
		<a class="btn btn-primary" href="personal_info.php">Task 1</a>
		<a class="btn btn-primary" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-primary" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-success" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-primary" href="weather_report.php">Task 5</a>
		<a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>

	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 4: Even or Odd Checker</h1>

<?php
    if (isset($_POST['check'])) {
    	
        $number = intval($_POST['number']);
        
        if ($number % 2 == 0) {
            echo "<div class=\"text-primary mb-3 fs-5\"><span class=\"text-dark\">{$number}</span> is an even number.</div>";
        } else {
            echo "<div class=\"text-primary mb-3 fs-5\"><span class=\"text-dark\">{$number}</span> is an odd number.</div>";
        }
    }
?>

    
<form method="post" action="">

	<div class="mb-3">
		<label for="number" class="form-label">Enter a Number</label>
        <input type="number" name="number" id="number" class="form-control" required>
	</div> 

        <input type="submit" name="check" value="Check" class="btn btn-primary">

</form>



	</div> 	
</div> 

	</div> 
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
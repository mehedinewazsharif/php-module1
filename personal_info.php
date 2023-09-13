<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Personal Information</title>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<?php 
	$name = "Mehedi Newaz Sharif";
	$age = 33;
	$country = "Bangladesh";
	$introduction = "I have been working with php for almost three years. We have developed several management software as per client's requirements. Also worked with various blogs, admin panel and had the opportunity to work in various organizations as a backend developer. Joined Ostad Platform to learn Laravel to develop myself in a new way.";
?>

<div class="container py-5">
	<div class="text-center mb-5">
		<a class="btn btn-success" href="personal_info.php">Task 1</a>
		<a class="btn btn-primary" href="temperature_converter.php">Task 2</a>
		<a class="btn btn-primary" href="grade_calculator.php">Task 3</a>
		<a class="btn btn-primary" href="even_odd_checker.php">Task 4</a>
		<a class="btn btn-primary" href="weather_report.php">Task 5</a>
		<a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
		<a class="btn btn-primary" href="simple_calculator.php">Task 7</a>
	</div>


<h1 class="h3 mb-5">Task 1: Personal Information</h1>

<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<td><?php echo $name;?></td>
	</tr>
	<tr>
		<th>Age</th>
		<td><?php echo $age;?></td>
	</tr>
	<tr>
		<th>Country</th>
		<td><?php echo $country;?></td>
	</tr>
	<tr>
		<td colspan="2" ><?php echo $introduction;?></td>
	</tr>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</div>

</body>
</html>
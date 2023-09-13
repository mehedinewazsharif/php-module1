<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Calculator</title>
   
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
        <a class="btn btn-primary" href="comparison_tool.php">Task 6</a>
        <a class="btn btn-success" href="simple_calculator.php">Task 7</a>
    </div>
    
	<div class="row d-flex justify-content-center">
<div class="card shadow-sm col-lg-5 col-12">
	<div class="card-body ">
<h1 class="h3 mb-5">Task 7: Simple Calculator</h1>



<?php
    if (isset($_POST['calculate'])) {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];
        

        if($operation=="add"){
            $result = $num1 + $num2;
        }elseif ($operation=="subtract"){
            $result = $num1 - $num2;
        }elseif($operation=="multiply"){
            $result = $num1 * $num2;
        }elseif($operation=="divide"){
            if($num2 != 0){
                $result = $num1 / $num2;
            }else{
                $result = "Division by zero is not allowed.";
            }
        }else{
            echo "<div class=\"text-danger\">Invalid operation.</div>";
        }

        echo "<div class=\"text-primary mb-3 fs-5\">Result: <span class=\"text-dark\">{$result}</span></div>";
    }
?>
    
    <form method="post" action="">
    	<div class="mb-3">
        <label for="num1" class="form-label">Enter the first number</label>
        <input type="number" name="num1" class="form-control" id="num1" required>
    </div>
        <div class="mb-3">
        <label for="num2" class="form-label">Enter the second number</label>
        <input type="number" name="num2" class="form-control" id="num2" required>
    </div>
        <div class="mb-3">
        <label for="operation" class="form-label">Select operation</label>
        <select name="operation" class="form-select" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
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
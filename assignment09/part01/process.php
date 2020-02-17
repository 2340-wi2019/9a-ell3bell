<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

    $BMI = ($weight / ($height * $height)) * 703;

    if($BMI < 10){
        $label_value = "underweight";
    } else if ($BMI > 30){
        $label_value = "obese";
    } else {
        $label_value = "normal";
    }


?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $BMI; ?>, which is considered <?php echo $label_value; ?>.</p>
</body>
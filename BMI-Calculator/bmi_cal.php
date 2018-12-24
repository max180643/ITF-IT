<?php

$name = $_POST["name"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$bmi = $weight/(($height/100)*($height/100));
print("<h1>Info</h1>");
printf("Name : %s<br>", $name);
printf("Height : %s cm<br>", $height);
printf("Weight : %s kg<br>", $weight);
print("<h1>Result</h1>");
printf("BMI : %.2f<br>", $bmi);
if ($bmi < 18.5){
    printf("BMI Categories : Underweight");
}elseif ($bmi < 24.9){
   printf("BMI Categories : Heathy Weight");
}elseif ($bmi < 29.9){
   printf("BMI Categories : Overweight");
}elseif ($bmi < 34.9){
   printf("BMI Categories : Obese");
}elseif ($bmi < 39.9){
   printf("BMI Categories : Severely Obese");
}else{
   printf("BMI Categories : Morbidly Obese");
}

?>

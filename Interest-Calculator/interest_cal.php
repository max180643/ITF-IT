<?php

$amount = $_POST["amount"];
$rate = $_POST["rate"];
$year = $_POST["year"];
$interest = 1 + ($rate / 100);
printf("<h1>Info</h1>");
printf("Initial Amount : %s Bath<br>", $amount);
printf("Annual Intetest Rate : %s Percent<br>", $rate);
printf("Number of Years : %s Years<br>", $year);
printf("<h1>Result</h1>");
for($num=1;$num<=$year;$num++)
{
    $amount *= $interest;
    printf("Year %d : %s Bath<br>", $num, $amount);
}
?>

<!-- Question 01:

		Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

So days of running month should dynamic (by php build in function) -->

<?php
// $currentDate = date('M-d');
// echo $currentDate;

$startDate = date("01");
$endDay = date("t");
$monthName = date("M");


for($i=$startDate; $i<=$endDay; $i++){
    echo $monthName . $i ;
    echo "<br>";
}

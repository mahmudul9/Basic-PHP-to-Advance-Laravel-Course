

<h3> Question 01 </h3>

<?php
	$purchased_products = array(

        array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

        array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

        array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);
// total purchased qty
$total_qty = [10,50,7];
echo array_sum($total_qty);

echo"<br>";
// total amount

$total_amount = [550,1500,600];
echo array_sum($total_amount);

echo"<br>";
?>



<!-- ############ -->

<h3> Question 02 </h3>
<?php


$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
 $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

//   make a single array from this two arrays
 echo"<pre>";
 $new_array = array_merge($first_email_array, $second_email_array);
 print_r($new_array);

 echo"<br>";

//  don’t keep any value in multiple time
echo "<pre>";
$new_array = array_diff($first_email_array, $second_email_array);
print_r($new_array);

echo"<br>"; 
?>



<!-- ############ -->

<h3> Question 03 </h3>
<?php


$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

echo "<pre>";
print_r(array_chunk($citylist,4));
?>
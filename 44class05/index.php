<!-- Question 01: 

	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.

Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

Step 2: Then check the total number of factors of that number

Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number. -->
<h2> Question 01 </h2>
<?php
$number=[12,34,2,6,78];

foreach($number as $key=>$value){
  $num=$value;
  $n=0;
  for($i=2;$i<$num;$i++){
    if($num % $i == 0){
      $n++;
      break;
    }
  }
  if($n == 0){
    echo $num. "is a prime number";
    echo "<br>";
  }

}
?>

<!-- Rafikul vai solve -->
<!-- <?php
$given_array = [12,34,2,6,78,67,27,81];

foreach ($given_array as $key => $number) {
$is_prime = true; for($i = 2; $i <= $number - 1; $i++) {
     if ($number % $i == 0) {
       $is_prime = false;
}
}
if ($is_prime) {
echo "{$number} is a prime number <br>"; }
 else {
echo "{$number} is not a prime number <br>";
}
}
?> -->

   <!-- Question 02: 

	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

Go to daraz website and pick any 5 products and make your array.

Must mention Which type of array you have made. -->



 <h2> Question 02 </h2>

<?php
echo"Multidimensional Array";
echo"<hr>";

$product=[
 ['model'=>'Nokia 105', 'rate'=>'৳ 2,268' ,'color'=>'Black', 'available'=>'yes'],
 ['model'=>'Nokia 225', 'rate'=>'৳ 3,505' ,'color'=>'Blue', 'available'=>'yes'],
 ['model'=>'Nokia 8000 DS', 'rate'=>'৳ 6,701' ,'color'=>'Red', 'available'=>'yes'],
 ['model'=>'Nokia 150 DS', 'rate'=>'৳ 9,801' ,'color'=>'yellow', 'available'=>'yes'],
 ['model'=>'Nokia 1200', 'rate'=>'৳ 2,801' ,'color'=>'white', 'available'=>'yes']
];
foreach($product as $key => $value){
    foreach($value as $key2=>$value2){
        echo $key2 . " => " . $value2;
        echo"<br>";
    }
    echo"<hr>";
}
?>




<!-- Question 03: 

		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

Find the maximum value from this array.

Must use a foreach loop. -->

<h2> Question 03 </h2>
<?php


$num=array(0,10,80,67,60,89,91,56,45,30,95,83,99);
//using foreach loop
$x = 0;
foreach ($num as $key=>$value)
 {
    if ($value > $x) {
        $x = $value;
    }
}
echo "Maximum value is"." " . $x;
?>







<!-- 
	Question 04: 

		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3…. -->


<h2> Question 04 </h2>

<?php
$value=array(0,10,80,67,60,89,91,56,45,30,95,83,99);
foreach($value as $key => $value1){
    if($key % 2==0){
      echo "index". $key . "=>" . $value1;
      echo"<br>";
    }
}
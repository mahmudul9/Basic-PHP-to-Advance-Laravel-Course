<!-- Question 03: 

		Factorial - I think everyone knows the word. Factorial of 4 is given below:

4! = 4*3*2*1 = 24

6! = 6*5*4*3*2*1 = 720  

So let’s calculate the factorial of 7. -->

<?php
$number= 7;
$factorial=1;
for($i=$number; $i>0; $i--){
    $factorial = $factorial * $i ;
}
echo " $number! value is =" .$factorial;


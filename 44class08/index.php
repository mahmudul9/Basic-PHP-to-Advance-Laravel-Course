<!-- Create a function that will return children, teenagers, young people, old people from the age -->

<!-- Question 01 -->
<h3>Question 01</h3>
<?php
function age($yourage){
    if($yourage<=12){
        return 'children';
    }
    else if($yourage>=11 && $yourage<=19){
        return 'teenagers';
    }
    else if($yourage>=20 && $yourage<=40){
        return 'teenagers';
    }
    else {
        return 'old people';
    }
}

echo age($yourage=1);
echo "<br>";
echo age($yourage=14);echo "<br>";
echo age($yourage=31);echo "<br>";
echo age($yourage=51);



echo "<br>";echo "<br>";

?>

<h3>Question 02</h3>
 <!-- Question 02
 Create a function that will return the area of a rectangle, square, triangle -->
<?php
function area($a,$b=0,$c=0){
if ($a>0 && $b>0 && $c>0) {
    return"Area of rectangle". $a+$b+$c;
}
else if ($a>0 && $b>0) {
    return"Area of triangle". (1/2)*$a*$b;
}
else if ($a>0) {
    return"Area of square". $a*$a;
}

}
echo area(4,2,5);echo "<br>";
echo area(4,2);echo "<br>";
echo area(5);echo "<br>";


echo "<br>";echo "<br>";echo "<br>";


?>

<h3>Question 03</h3>
<!-- Question 03
 GPA function for result publishing -->

<?php
function result_publish($SubjectA,$SubjectB,$SubjectC,$SubjectD){
    // Result Calculation
$totalMark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
$averageMark = $totalMark / 4 ;

// Result

// Total sum must contain all sub pass and not more 100 each
if($SubjectA  <40 || $SubjectB  <40 || $SubjectC  <40 || $SubjectD <40){
    return "Result Fail";
}
elseif($SubjectA >100 || $SubjectB >100 || $SubjectC >100 || $SubjectD>100){
    return"error command";
}

// main function
elseif($averageMark>= 80 && $averageMark<=100){
    return "You got A+";
}

elseif($averageMark>= 70 && $averageMark<=79){
    return "You got A";
}
elseif($averageMark>= 60 && $averageMark<=69){
    return "You got A-";
}
elseif($averageMark>= 50 && $averageMark<=59){
    return "You got B";
}
elseif($averageMark>= 40 && $averageMark<=49){
    return "You got c";
}
elseif($averageMark>= 1 && $averageMark<=39){
    return "You got c";
}
else{
    return "Error command";
}
}
echo result_publish(45,60,70,99);echo "<br>";
echo result_publish(70,60,90,95);

echo "<br>";echo "<br>";

?>


<h3>Question 04</h3>
 <!-- Question 04
 Create an age calculator function -->

<?php
function get_age( $date ) { 
    $age = date('Y') - $date; 
   if (date('md') < date('md', strtotime($date))) { 
       return $age - 1; 
   } 
   return $age; 
} 
echo"Your age is"." ". get_age(1999 );


echo "<br>";echo "<br>";
?>



<h3>Question 05</h3>
<!-- Create a BMI function for health -->
<?php
function BMI_Index($weight,$height){

    $height=$height/100;
    $BMI=($weight/($height*$height));
    $BMI=number_format($BMI,2);



    if ($BMI<=18.5) {
       return"Underweight";
    }
    else if ($BMI>=18.5 && $BMI<=24.9){
        return"Healthy Weight";
    }
    else if ($BMI>=25.0 && $BMI<=29.9){
        return"Overweight";
    }
    else if ($BMI>=30.0){
        return"Obesity";
    }
    else{
        "Error Input";
    }
}
echo BMI_Index(44,0.445);echo "<br>";
echo BMI_Index(54,0.889);echo "<br>";
echo BMI_Index(64,155);echo "<br>";


echo "<br>";echo "<br>";
?>


<h3>Question 06</h3>
<!-- // Question 06
// Create a currency converter function from taka to USD, CAD, POUND, EURO etc -->


<?php
function CurrencyConverter($Money,$Convert){

   

    if ($Convert=="USD") {
        $convert_money="$Money"." TK=" . $Money/86.56 ." USD";
        return  $convert_money;
    }
    elseif ($Convert=="CAD"){
        $convert_money="$Money"." TK=" . $Money/67.57 ." CAD";
        return  $convert_money;
        
    }
    elseif ($Convert=="RUPI"){
        $convert_money="$Money"." TK=" . $Money/1.13 ." RUPI";
        return  $convert_money;
    }
    elseif ($Convert=="POUND"){
        $convert_money="$Money"." TK=" . $Money/108.93 ." POUND";
        return  $convert_money;
    }
    elseif ($Convert=="RIYAL"){
        $convert_money="$Money"." TK=" . $Money/23.08 ." RIYAL";
        return  $convert_money;
    }
    elseif ($Convert=="EURO"){
        $convert_money="$Money"." TK=" . $Money/92.14 ." EURO";
        return  $convert_money;
    }
}

echo CurrencyConverter(100,"USD");echo "<br>";
echo CurrencyConverter(100,"CAD");echo "<br>";
echo CurrencyConverter(100,"RUPI");echo "<br>";
echo CurrencyConverter(100,"POUND");echo "<br>";
echo CurrencyConverter(100,"RIYAL");echo "<br>";
echo CurrencyConverter(100,"EURO");echo "<br>";
?>
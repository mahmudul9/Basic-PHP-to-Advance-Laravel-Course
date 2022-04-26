<!-- Create a function that will return children, teenagers, young people, old people from the age -->

<!-- Question 01 -->
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
// Question 02
// Create a function that will return the area of a rectangle, square, triangle

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



// Question 03
// GPA function for result publishing

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
// Question 04
// Create an age calculator function
function get_age( $date ) { 
    $age = date('Y') - $date; 
   if (date('md') < date('md', strtotime($date))) { 
       return $age - 1; 
   } 
   return $age; 
} 
echo"Your age is"." ". get_age(1999 );


echo "<br>";echo "<br>";
// Question 05
// Create a BMI function for health

function BMI_Index($BMI){
    if ($BMI<=18.5) {
       $output=	"Underweight";
    }
    else if ($BMI>=18.5 && $BMI<=24.9){
        $output=	"Healthy Weight";
    }
    else if ($BMI>=25.0 && $BMI<=29.9){
        $output=	"Overweight";
    }
    else if ($BMI>=30.0){
        $output=	"Obesity";
    }
}
echo 
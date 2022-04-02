<?php
// Rishita's subject marks

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 80;
$SubjectD = 90;


// Result Calculation
$totalMark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
$averageMark = $totalMark / 4 ;

// Result

// Total sum must contain all sub pass and not more 100 each
if($SubjectA  <40 || $SubjectB  <40 || $SubjectC  <40 || $SubjectD <40){
    echo "Fail";
}
elseif($SubjectA >100 || $SubjectB >100 || $SubjectC >100 || $SubjectD>100){
    echo"error command";
}

// main function
elseif($averageMark>= 80 && $averageMark<=100){
    echo "You got A+";
}

elseif($averageMark>= 70 && $averageMark<=79){
    echo "You got A";
}
elseif($averageMark>= 60 && $averageMark<=69){
    echo "You got A-";
}
elseif($averageMark>= 50 && $averageMark<=59){
    echo "You got B";
}
elseif($averageMark>= 40 && $averageMark<=49){
    echo "You got c";
}
elseif($averageMark>= 1 && $averageMark<=39){
    echo "You got c";
}
else{
   echo "Error command";
}
?>


<!-- 2nd task -->
<!-- Question 02: 
Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

When you click on the power/start button, your bike takes a start, 
When you click stop, your bike takes a stop, 
When you press the break, your bike take break, 
when you give the gear, your bike move faster and faster, 
when you press the signal button, your bike shows a signal light.
When you press the headlight button, your bike’s headlight will start.
Solve this game using Switch case and submit it on github.

 -->
<?php
echo"<br>";


$my_bike= "headlight";

switch ($my_bike){
    case'start':
        echo"bike takes a start";
        break;
    case'stop':
        echo"bike takes a stop";
        break;
    case'break':
        echo"bike takes a break";
        break;
    case'gear':
        echo"bike move faster and faster";
        break;
    case'signal':
        echo"bike shows a signal light";
        break;
    case'headlight':
        echo"bike's headlight will start";
        break;
    default:
        echo"bike will not start";
        break;

}
?>
<!-- Question 02: 

	If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.

You have to rotate from 1 to 100.

Your output message should like that, “3 is a odd number”

Not need to print even number -->


<?php
for($i=1;$i<=100;$i+=2){
 echo $i  .' '. "is a odd number";
 echo "<br>";
}

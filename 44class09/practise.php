<h3>Isset </h3>
<?php
// isset  variable value assign/set kora ase kina ta check korar jonno
$name;

if (isset($name)) {
    echo "Value already set";
} else {
    echo "No value";
}

echo "<br>";
// Another example
$name="karim";

if (isset($name)) {
    echo "Value already set";
} else {
    echo "No value";
}

echo "<br>";echo "<br>";
?>



<h3>Empty</h3>
<?php
// empty   Variable er moddhe value ase kina check korar jonno
// Assign ase kintu value ase kina ai tar jonno


$name="";

if (empty($name)) {
    echo"No Value";
} else {
    echo"Have Value";
}

echo "<br>";
// Another example
$name="Khaled";

if (empty($name)) {
    echo"No Value";
} else {
    echo"Have Value";
}

echo "<br>";echo "<br>";
?>

<h3>Die/Exit</h3>

<?php
// Die Error find er jonno  Die porjonto code run hobe er por r run hobe na
    echo "Rahim1";
    echo "Rahim2";
    echo "Rahim3";
    echo "Rahim4";
    echo "Rahim5";

    // die('stop');
    // exit('stop');

    echo "Rahim6";
    echo "Rahim7";
    echo "Rahim8";
 ?>

<h3>Empty Variable</h3>
<?php
 $list= '';
 $list='<ul>';
 $list='<li> List1 </li>';
 $list='<li> List2 </li>';
 $list='<li> List3 </li>';
 $list='</ul>';
 echo $list;
 ?>

<h3>Null Variable</h3>
<?php 
 $name=null;
?>

<!-- Question 05: 

		You have an array of your purchased product items. 

['apple', 'orange', 'banana', 'mango']

Show all products as a table list.

Output should like that: “sl- 1 and product - apple” -->

<?php
$products = ['apple', 'orange', 'banana', 'mango'];
foreach ($products as $key => $product){
    echo ++$key . '-' . $product;
    echo "<br>";
}
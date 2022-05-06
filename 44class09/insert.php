<?php
// echo "Registration success";



// GET METHOD
// echo "<pre>";
// print_r($_GET);



// POST method*****
// print_r($_POST);



// Request method
// print_r($_REQUEST);


// Without array individual value
$Username= $_POST['Username'];
$Email= $_POST['Email'];
$PhoneNumber= $_POST['PhoneNumber'];
$password= $_POST['password'];

if ($Username=='' || $Email=='' || $PhoneNumber=='' || $password=='') {
    // echo "All fields are required";
    echo "<script> alert('All fields are required') </script>";
} else {
   echo "Congratulations";
}

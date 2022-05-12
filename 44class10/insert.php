<?php

echo "<pre>";
print_r ($_POST);

    echo "<br/>";

    $Username= $_POST['Username'];echo "<br/>";
    $Email= $_POST['Email'];echo "<br/>";
    $PhoneNumber= $_POST['PhoneNumber'];echo "<br/>";
    $password= $_POST['password'];


if($Username=='' ||$Email=='' ||  $PhoneNumber=='' || $password==''){
    echo "<script>alert('All field are required!'); </script>";
}
else{
    echo "Everything is okey";
}
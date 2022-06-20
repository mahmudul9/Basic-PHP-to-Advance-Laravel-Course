<?php

require "dbconfig.php";


// Banner add
if (isset($_POST['submitBanner'])){

    $title     = $_POST["title"];
    $sub_title = $_POST["sub_title"];
    $details   = $_POST["details"];

    // For backend validation
    if(empty($title) || empty($sub_title) || empty($details)){
        $message= "All field are required";
    }
    else{
        $insertQry = "INSERT INTO banners (title, sub_title, details) VALUES ('{$title}', '{$sub_title}', '{$details}')";
       $isSubmit = mysqli_query($dbConnect,$insertQry);

       if ($isSubmit==true) {
        $message = "Banner Insert Successfull";
       } else {
        $message = "Banner Insert Failed";
       }
    }

       header("Location:../banner/bannerAdd.php?msg={$message}");
       

}



// Update banner 

if (isset($_POST['updateBanner'])){

    $banner_id = $_POST["banner_id"];
    $title     = $_POST["title"];
    $sub_title = $_POST["sub_title"];
    $details   = $_POST["details"];

    // For backend validation
    if(empty($title) || empty($sub_title) || empty($details)){
        $message= "All field are required";
    }
    else{

        $updateQry ="UPDATE banners SET title ={$title}, sub_title ={$sub_title}, detail ={$details} WHERE id='{$banner_id}' ";

       $isSubmit = mysqli_query($dbConnect,$updateQry);

       if ($isSubmit==true) {
        $message = "Banner Update Successfull";
       } else {
        $message = "Banner Update Failed";
       }
    }

       header("Location:../banner/bannerUpdate.php?banner_id={$banner_id}&msg={$message}");
       

}

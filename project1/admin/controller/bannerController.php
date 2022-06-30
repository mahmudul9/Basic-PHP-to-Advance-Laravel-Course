<?php

require 'dbconfig.php';


// Banner add
if (isset($_POST['submitBanner'])){


    // For image
    $upload_status = false;

    if (isset( $_FILES['image'])) {
        // echo "<pre>";
        // print_r ($_FILES['image']);
        // echo "</pre>";
        
        $ImageArr = $_FILES['image'];

        $file_name = $ImageArr ['name'];
        $file_tmp_name = $ImageArr ['tmp_name'];
        $file_size = $ImageArr ['size'];   //For size

        $nameExtArr=explode('.',$file_name);
        $file_extension= strtolower(end($nameExtArr));
        $valid_extension = array('jpg','png','jpeg','gif');

         $random_file_name = time().".".$file_extension;  //for random name generate

        if (in_array($file_extension,$valid_extension)) {
            move_uploaded_file($file_tmp_name, '../uploads/bannerImage/'.$random_file_name);
            $upload_status = true;
        }else{
             $message= $File_extension. " is not valid" ;
        }
    }
    else{
         $message= "File Not found";
    }


    // Image end


    $title     = $_POST["title"];
    $sub_title = $_POST["sub_title"];
    $details   = $_POST["details"];

    // For backend validation
    if(empty($title) || empty($sub_title) || empty($details) || $upload_status==false) {
        $message= "All field are required";
    }
    else{
        $insertQry = "INSERT INTO banners (title, sub_title, details, image) VALUES ('{$title}', '{$sub_title}', '{$details}','{$random_file_name}')";
       $isSubmit = mysqli_query($dbCon,$insertQry);

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

    $banner_id = $_POST['banner_id'];
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];

    // For backend validation
    if(empty($title) || empty($sub_title) || empty($details)){
        $message= "All field are required";
    }
    else{

        $updateQry ="UPDATE banners SET title='{$title}', sub_title='{$sub_title}', details='{$details}' WHERE id='{$banner_id}'";
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if ($isSubmit==true) {
        $message = "Banner Update Successfull";
       } else {
        $message = "Banner Update Failed";
       }
    }

    // For banner update page redirection
    //    header("Location:../banner/bannerUpdate.php?banner_id={$banner_id}&msg={$message}");

    // For Banner list page redirection
       header("Location:../banner/bannerList.php?msg={$message}");
       

}

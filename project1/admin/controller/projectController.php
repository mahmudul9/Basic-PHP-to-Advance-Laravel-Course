<?php

require 'dbconfig.php';


// Project add
if (isset($_POST['submitProject'])){


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
            move_uploaded_file($file_tmp_name, '../uploads/projectImage/'.$random_file_name);
            $upload_status = true;
        }else{
             $message= $File_extension. " is not valid" ;
        }
    }
    else{
         $message= "File Not found";
    }


    // Image end


    $category_id  = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];

    // For backend validation
    if(empty($category_id) || empty($project_name) || empty($project_link) || ($project_thumb)==false) {
        $message= "All field are required";
    }
    else{
        $insertQry = "INSERT INTO projects (category_id, project_name, project_link, project_thumb) VALUES ('{$category_id}', '{$project_name}', '{$project_link}','{$random_file_name}')";
       $isSubmit = mysqli_query($dbCon,$insertQry);

       if ($isSubmit==true) {
        $message = "Project Insert Successfull";
       } else {
        $message = "Project Insert Failed";
       }
    }

       header("Location:../project/projectAdd.php?msg={$message}");
       

}



// Update project 

if (isset($_POST['updateProject'])){

    $project_id = $_POST['project_id'];
    $category_id     = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link   = $_POST['project_link'];

    // For backend validation
    if (empty($category_id) || empty($project_name) || empty($project_link)) {
        $message = "All fields are required";
    }
    else{

        $updateQry = "UPDATE projects SET category_id='{$category_id}', project_name='{$project_name}', project_link='{$project_link}',project_thumb='{$random_file_name}' WHERE id='{$project_id}'";

        $isSubmit = mysqli_query($dbCon, $updateQry);
        
       if ($isSubmit==true) {
        $message = "Project Update Successfull";
       } else {
        $message = "Project Update Failed";
       }
    }

    // For project update page redirection
    //    header("Location:../project/projectUpdate.php?project_id={$project_id}&msg={$message}");

    // For Project list page redirection
       header("Location:../project/projectList.php?msg={$message}");
       

}

<?php

require '../controller/dbconfig.php';

$project_id=$_GET['project_id'];

$updateQry ="UPDATE projects SET active_status=0	 WHERE id='{$project_id}'";
$isSubmit = mysqli_query($dbCon, $updateQry);

if ($isSubmit==true) {
 $message = "Project Delated Successfull";
} else {
 $message = "Project Delated Failed";
}
header("Location:../project/projectList.php?msg={$message}");
       
<?php

require '../controller/dbconfig.php';

$banner_id=$_GET['banner_id'];

$updateQry ="UPDATE banners SET active_status=0	 WHERE id='{$banner_id}'";
$isSubmit = mysqli_query($dbCon, $updateQry);

if ($isSubmit==true) {
 $message = "Banner Delated Successfull";
} else {
 $message = "Banner Delated Failed";
}
header("Location:../banner/bannerList.php?msg={$message}");
       
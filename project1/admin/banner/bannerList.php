<!DOCTYPE html>
<html lang="en">
<?php
// die (basename(__DIR__));
// echo basename(__DIR__);

if (basename(__DIR__)!="admin") {
	$baseUrl="../";
	$isInternal = true;
}
else {
	$baseUrl="";
	$isInternal=false;
}
 ?>

<?php include "../includes/head.php"; ?>


<!-- DATABASE CONNECT BY CONTROLLER folder -->
<?php require "../controller/dbconfig.php"; ?>


<body>

<!-- Top Nav bar -->
<?php include '../includes/top_nav.php';?>

<!-- /Top Nav bar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


			
              <!-- Main navigation -->
			  <?php include '../includes/navigation.php';?>
					<!-- /Main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">			
							<li><a href="#"><i class="icon-home2 position-left"></i>Banner</a></li>
							<li class="active">List</li>
						</ul>
				
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Banner List</h5>
							<div class="heading-elements">
								<ul class="icons-list">

								<li style="margin-right: 10px; color: #fff; border-radius:10px;"><a href="bannerAdd.php" class="btn btn-primary add-new">Add New</a></li>

			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">

						<!-- For banner delate -->
						<?php
								  if (isset($_GET['msg'])) {

									?>
							
									<div class="alert alert-success no-border">
											<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
											<span class="text-semibold">Success</span> <?php echo $_GET['msg']; ?>
										</div>
								 
								 <?php }  ?>
					

						<table class="table table-striped table-bordered table-hover datatable-basic">
							<thead>
								<tr>
									<th width="5%">Sl.No</th>
									<th width="20%">Title</th>
									<th width="20%">Sub Title</th>
									<th width="25%">Details</th>
									<th width="15%">Image</th>
									<th width="15%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>

			<!-- ####### Data from database to website table ########## -->
						<?php 
						 $selectQry= "SELECT * FROM banners WHERE active_status=1";
						 $bannerList= mysqli_query($dbCon , $selectQry);
						 foreach($bannerList as $key => $banner){
							
						?>
								<tr>
									<td> <?php echo ++$key; ?> </td>
									<td> <?php echo $banner["title"];?> </td>
									<td> <?php echo $banner["sub_title"];?> </td>
									<td> <?php echo $banner["details"];?> </td>
									<td>
										<img class="img-responsive" width="100%" height="100%" src="<?php echo "../uploads/bannerImage/".$banner["image"];?>" />    
									</td> 

									<td class="text-center">

									<a href="bannerUpdate.php?banner_id=<?php echo $banner['id']; ?>"><i class="icon-pencil5"></i></a>
									<a href="bannerDelate.php?banner_id=<?php echo $banner['id']; ?>"><i class=" icon-trash"></i></a>

											</li>
										</ul>
									</td>
								</tr>
							
                        <?php  } ?>

							</tbody>
						</table>

						</div>

					</div>
					<!-- /basic datatable -->







					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



	<?php include '../includes/script.php'; ?>

</body>
</html>

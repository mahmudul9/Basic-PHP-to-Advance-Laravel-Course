<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php"; ?>

<body>

	<!-- Top Nav bar -->
	<?php include 'includes/top_nav.php';?>

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
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg"
										class="img-circle img-sm" alt=""></a>
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
					<?php include 'includes/navigation.php';?>
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
							<li class="active">Update</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Banner Update</h5>
							<div class="heading-elements">
								<ul class="icons-list">


								</ul>
							</div>
						</div>

						<div class="panel-body">


							<!-- Basic examples -->
							<div class="panel panel-flat">
								<div class="panel-heading">

								<div class="panel-body">

								<form class="form-horizontal" action="#">
								<fieldset class="content-group mt-5">

									<div class="form-group">
										<label class="control-label col-lg-2">Default text input</label>
										<div class="col-lg-10">
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control">
										</div>
									</div>

			                        <div class="form-group">
			                        	<label class="control-label col-lg-2">Default select</label>
			                        	<div class="col-lg-10">
				                            <select name="select" class="form-control">
				                                <option value="opt1">Usual select box</option>
				                                <option value="opt2">Option 2</option>
				                                <option value="opt3">Option 3</option>
				                                <option value="opt4">Option 4</option>
				                                <option value="opt5">Option 5</option>
				                                <option value="opt6">Option 6</option>
				                                <option value="opt7">Option 7</option>
				                                <option value="opt8">Option 8</option>
				                            </select>
			                            </div>
			                        </div>

									<div class="form-group">
										<label class="control-label col-lg-2">Textarea</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-lg-2">Styled file input</label>
										<div class="col-lg-10">
											<input type="file" class="file-styled">
										</div>
									</div>
							

								</fieldset>

								<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								
									<a href="banner.php" class="btn btn-primary"><i class=" icon-arrow-left13 position-right"></i> Back</a>

								</div>
							</form>


							</div>
							</div>
							<!-- /basic examples -->


						</div>

					</div>
					<!-- /basic datatable -->







					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a
							href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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



	<?php include 'includes/script.php'; ?>

</body>

</html>
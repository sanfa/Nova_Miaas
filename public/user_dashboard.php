<?php include("../includes/initialize.php"); ?>
<?php UserManager::confirm_logged_in();?>
<?php
  $user = UserManager::find_user_by_email($_SESSION["email"]);
?>

<?php include("../includes/layouts/header.php"); ?>

			<!-- row 1 start in header -->
			<?php include("aside_topright.php"); ?>
		         <!-- end of class row 1-->

			<!-- row 2 -->
			<div class="row">
				<?php $activeMenu = "user_dashboard" ?>
				<?php include("aside_bar.php"); ?>


	         	<article class="col-lg-10">

	         		<div class="row" style="border-bottom: 1px solid #E4E4E4; margin-left:1em;">
	         			<h2orange>Resources</h2orange>
	         		</div>
	         		<p style="font-size:16px; margin-left:1em;"> You are using the following Nova MIaaS resources: </p>
	         		<br>

					<div class="row" style="border-bottom: 1px solid #E4E4E4; margin-left:1em;">
	         			<h2orange>Create Instance</h2orange>
	         		</div>
	         		<p style="font-size:16px; margin-left:1em;"> To start using Nova MIaaS you will want to launch a mobile emulator, known as an Nova MIaaS instance. </p>
	         		<p style="margin-left:1em;margin-top:2em"><a href="user_request.php" class="btn btn-warning">Launch Instance</a></p>
	         	</article>
	    	</div><!-- end of class row 2-->


			<!-- row 3 -->

			<!-- row 4 in footer -->

<?php include("../includes/layouts/footer.php"); ?>
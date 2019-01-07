<?php 

include 'includes/header.php';

?>

<section id="wrapper" class="step-register">
	<div class="register-box">
		<div class="">
			<!-- multistep form -->
			<form id="msform">
				<!-- progressbar -->
				<ul id="eliteregister">
					<li class="active">Account Setup</li>
					<li>Social Profiles</li>
					<li>Personal Details</li>
				</ul>
				<!-- fieldsets -->
				<fieldset>
					<h2 class="fs-title">Create your account</h2>
					<h3 class="fs-subtitle">This is step 1</h3>
					<input type="text" name="email" placeholder="Email" />
					<input type="password" name="pass" placeholder="Password" />
					<input type="password" name="cpass" placeholder="Confirm Password" />
					<input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
					<fieldset>
						<h2 class="fs-title">Social Profiles</h2>
						<h3 class="fs-subtitle">Your presence on the social network</h3>
						<input type="text" name="twitter" placeholder="Twitter" />
						<input type="text" name="facebook" placeholder="Facebook" />
						<input type="text" name="gplus" placeholder="Google Plus" />
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
						<fieldset>
							<h2 class="fs-title">Personal Details</h2>
							<h3 class="fs-subtitle">We will never sell it</h3>
							<input type="text" name="fname" placeholder="First Name" />
							<input type="text" name="lname" placeholder="Last Name" />
							<input type="text" name="phone" placeholder="Phone" />
							<textarea name="address" placeholder="Address"></textarea>
							<input type="button" name="previous" class="previous action-button" value="Previous" />
							<input type="submit" name="submit" class="submit action-button" value="Submit" /> </fieldset>
						</form>
						<div class="clear"></div>
					</div>
				</div>
			</section>
			<!-- jQuery -->
			<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
			<!-- Bootstrap Core JavaScript -->
			<script src="bootstrap/dist/js/tether.min.js"></script>
			<script src="bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
			<!-- Menu Plugin JavaScript -->
			<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
			<script src="plugins/bower_components/register-steps/jquery.easing.min.js"></script>
			<script src="plugins/bower_components/register-steps/register-init.js"></script>
			<!--slimscroll JavaScript -->
			<script src="js/jquery.slimscroll.js"></script>
			<!--Wave Effects -->
			<script src="js/waves.js"></script>
			<!-- Custom Theme JavaScript -->
			<script src="js/custom.min.js"></script>
			<!--Style Switcher -->
			<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
		</body>

		</html>
<?php 
include 'includes/header.php';
include 'hcms/includes/connection.php';


?>
<!--Header Section Ends-->
<div class="banner-section banner-image">
	<div class="container gallery">
		
	</div>
</div>

<section class="departments ptb ptb-sm">
	<div class="container">
		<div class="sec-title">
			<h2>Our Departments</h2>
		</div>
		<!-- <div class="search-sec">
			<form>
				<ul>
					<li>
						<input class="search-input" type="text" placeholder="Search Department">
						<button  class="fa fa-search"></button>
					</li>
				</ul>
			</form>
		</div> -->
		<br><br><br>
		<div class="row mb-25 ">

			<?php 
			$query = "SELECT * FROM department";
			$result = mysqli_query($conn,$query);

			while ( $row = mysqli_fetch_assoc($result)) {

				@$i += 1;
				?>
				<div class="col-sm-6">
					<div class="department-blocks">
						<span class="ambulance-icon flaticon-icon-131071"> </span>
						<div class="department-txt">
							<div class="sub-heading">
								<h4><?php echo $row['dept_name'] ; ?></h4>
							</div>
							<p>
								<?php echo $row['about'] ; ?>
							</p>
							
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

</section>

<div class="more-department-section padd-top padd-bottom">
	<div class="container">
		<div class="text-center">
			<h3>More Department</h3>
		</div>
		<p>
			if you are looking anymore department/Treatnment
			Free feel to contact us
		</p>
		<div class="text-center set-margin-top">
			<a href="contact-us.php" class="btn">contact us</a>
		</div>
	</div>
</div>


<?php 
include 'includes/footer.php';


?>
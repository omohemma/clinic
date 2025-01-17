<?php 

include 'hcms/includes/action.php';

if (isset($_GET['d'])) {
	$id = $_GET['d'];
}
include 'includes/header.php';

?>
<!--Header Section Ends-->
<div class="banner-section banner-image">
	<div class="container gallery">
		<div class="book-appointment-section appoint-link"	>
			<a href="book-appointment.php" class="inner-sec"> <span class="anchor-icon"> <i class="icon-calendar"></i> </span> book your appointment </a>
		</div>
	</div>
</div>
<div class="content padd-top padd-bottom">
	<div class="container">
		<div class="text-left col-manage-section">
			<h2>Doctors Profile</h2>

		</div>

		<?php 

		$where = array('id' => $id,'role' => 'doctor');

		$row = $obj->select_record("users",$where);

		?>
		<div class="row">
			<div class="col-sm-4 dr-figure">
				<figure>
					<img class="img-responsive" src="assets/images/doctor-image.jpg" alt="" />
				</figure>
				<div class="doctors-social-icons text-center">
					<a href="#" class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#" class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#" class="icons in"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href="#" class="icons google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

				</div>

			</div>
			<div class="col-sm-8 doctors-details-section">
				<h4><?php echo $row['title']." ".$row['lname'] ;?></h4>
				<span class="dr-des"><?php echo $row['speciality'] ;?></span>
				<p class="set-para">
					<?php echo $row['about'] ;?>
				</p>

				<blockquote class="doctors-quote">
					when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					It has survived not only five centuries but also the leap into.
				</blockquote>
				<article class="qualification-section">
					<h4>Qualification</h4>
					<span class="degree">MB , BM (Bachelor of Medicine) and BChir, ChB</span>
					<h4>Working Hours</h4>
					<ul class="timing-list">
						<li>
							<span class="day-section">monday</span><span class="time-section">08:00-18:30</span>
						</li>
						<li>
							<span class="day-section">tuesday</span><span class="time-section">08:00-14:00</span>
						</li>
						<li>
							<span class="day-section">wensday</span><span class="time-section">08:00-16:00</span>
						</li>
						<li>
							<span class="day-section">thursday</span><span class="time-section">08:00-16:00</span>
						</li>
						<li>
							<span class="day-section">friday</span><span class="time-section">08:00-16:00</span>
						</li>
					</ul>
				</article>

			</div>

		</div>
	</div>
</div>


<?php 
include 'includes/footer.php';


?>
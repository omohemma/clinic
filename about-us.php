<?php 
include 'includes/header.php';
include 'hcms/includes/connection.php';


?>
<div class="banner-section banner-image">
	<div class="container gallery">
		
		
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="event-section about-us-section padd-top padd-b-50">
			<div class="row">
				<div  class="col-sm-6 set-margin-bot about-section">
					<h2>about us</h2>
					<div class="common-padd-top about-section-para">
						<p>
							Mobile Healthcare Management is an automated healthcare sytem that facilutates good and quick proceeding in the health sector. iItIt also promotes eco-friendliness within staffs, herby ensuring that patients receive  optimum treatment
						</p>
					</div>
				</div>
				<div class="col-sm-6">
					<h2>gallery</h2>
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item ">
							<div class="common-padd-top">
								<div class="row">
									<div class="zoom col-sm-6">
										<figure class=" about-image">
											<a class="single-fancybox" href="assets/images/about-1.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-1.jpg" alt="image"/> </a>
										</figure>
									</div>
									<div class="zoom col-sm-6">
										<figure class=" about-image">
											<a class="single-fancybox" href="assets/images/about-2.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-2.jpg" alt="image"/> </a>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="item ">
							<div class="common-padd-top">
								<div class="row">
									<div class="zoom col-sm-6">
										<figure class=" about-image">
											<a class="single-fancybox" href="assets/images/about-1.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-1.jpg" alt="image"/> </a>
										</figure>
									</div>
									<div class="zoom col-sm-6">
										<figure class=" about-image">
											<a class="single-fancybox" href="assets/images/about-2.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-2.jpg" alt="image"/> </a>
										</figure>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-doctors  padd-bottom padd-top">
		<div class="container">
			<div class="text-center common-padd-bottom">
				<h2>our doctors</h2>
			</div>
			<div class="row">
				
				<?php 
				$query = "SELECT * FROM users WHERE role = 'doctor' LIMIT 4";
				$result = mysqli_query($conn,$query);

				while ( $row = mysqli_fetch_assoc($result)) {

					@$i += 1;
					?>
					<div class="col-sm-3 dr-intro">
						<figure class="dr-image"><img src="assets/images/dr-1.jpg" alt="image" class="img-responsive"/>
						</figure>
						<h5 class="text-center"><a href="doctor-details.php"><?php echo $row['title']." ".$row['lname'] ; ?></a></h5>
						<span class="doctor-title text-center">Dental Specialist</span>
					</div>

				<?php } ?>
			</div>
			<div class="text-center set-margin-top">
				<a href="doctors.php" class="btn">All doctors</a>
			</div>
		</div>
	</div>
	<div class="container padd-top padd-bottom">
		<div class="row">
			<div class="col-sm-6">
				<div class="depart-head">
					<h2>Our Departments</h2>
				</div>
				<div class="row">
					<div class="col-sm-6 about-image">
						<ul class=" depart-list">

							<?php 
							$query = "SELECT * FROM department";
							$result = mysqli_query($conn,$query);

							while ( $row = mysqli_fetch_assoc($result)) {
								
								@$i += 1;
								?>
								<li>
									<a href="#"><?php echo $row['dept_name'] ; ?></a>
								</li>

							<?php } ?>
							<!-- <li>
								<a href="#">Ear, Nose &amp; Throat</a>
							</li>
							<li>
								<a href="#">Eye Care</a>
							</li>
							<li>
								<a href="#">Diabetes Care</a>
							</li>
							<li>
								<a href="#">Radiology</a>
							</li>
							<li>
								<a href="#">Rheumatology</a>
							</li>
							<li>
								<a href="#">Lab Diagnostics</a>
							</li>
							<li>
								<a href="#">Child Care</a>
							</li> -->
						</ul>
						<div class="about-btn">
							<a href="departments.php" class="btn">view more</a>
						</div>
					</div>
					<figure class="col-sm-6 about-image">
						<img src="assets/images/operational.jpg" alt=""/>
					</figure>
				</div>
			</div>
			<div class="col-sm-6">
				<h2>Quick Enquiry</h2>

				<div class="alert alert-success alert-msg" id="success" style="display: none">
					<strong>Thank You</strong> for using our template. Your message has been sent.
				</div>
				<form method="post" name="contactForm" novalidate id="contact" class="about-form common-padd-top">
					<ul class="row">
						<li class="col-sm-6">
							<label class="form-title">First Name</label>
							<input class="form-part" type="text" name="name" data-ng-model="formData.name" required="" data-ng-pattern = "/^[a-zA-Z]/" data-ng-class="{'error' : contactForm.name.$error.pattern && contactForm.$blured || contactForm.name.$invalid && successStatus}">
						</li>
						<li class="col-sm-6">
							<label class="form-title">Last Name</label>
							<input class="form-part" type="text" name="lastname" data-ng-model="formData.lastname" required="" data-ng-pattern = "/^[a-zA-Z]/" data-ng-class="{'error' : contactForm.lastname.$error.pattern && contactForm.$blured || contactForm.lastname.$invalid && successStatus}">
						</li>
						<li class="col-sm-6">
							<label class="form-title">Email</label>
							<input class="form-part" type="email" name="email" required="" data-ng-model="formData.email" data-ng-pattern = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/" data-ng-class="{'error' : contactForm.email.$error.pattern && contactForm.$blured || contactForm.email.$invalid && successStatus}">
						</li>

						<li class="col-sm-6">
							<label class="form-title">Phone</label>
							<input class="form-part" type="tel" name="phoneNo" required="" data-ng-model="formData.phoneNo" data-ng-pattern = "/^[0-9]/" data-ng-class="{'error' : contactForm.phoneNo.$error.pattern && contactForm.$blured || contactForm.phoneNo.$invalid && successStatus}">

						</li>
						<li class="col-sm-12">
							<label class="form-title">Message</label>
							<textarea class="form-text-area" cols="5" rows="7" name="textarea" data-ng-model="formData.textarea" required="" data-ng-class="{'error' : contactForm.textarea.$error.required && contactForm.textarea.$blured || contactForm.textarea.$invalid && successStatus}"></textarea>										


						</li>
					</ul>
					<div class="text-left set-margin-top">
						<input class="btn btn-submit" type="submit" value="submit now"	data-ng-click = "submitcotactusForm(contactForm.$invalid)">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="about-partners padd-top padd-bottom">
		<div class="container">
			<div class="text-center mb-25">
				<h2>Our Partners</h2>
			</div>
			<div id="owl-partner" class="owl-carousel owl-theme">
				<div class="item">
					<img src="assets/images/partner-1.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-2.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-3.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-4.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-5.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-1.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-2.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-3.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-4.png" alt="image"/>
				</div>
				<div class="item">
					<img src="assets/images/partner-5.png" alt="image"/>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include 'includes/footer.php';


?>
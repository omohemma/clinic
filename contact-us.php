<?php 
include 'includes/header.php';

include 'hcms/includes/connection.php';
?>
<!--Header Section Ends-->
<div class="banner-section banner-image">
	<div class="container gallery">
		
	</div>
</div>
<section class="contactus ptb ptb-sm write-sec">

	<div class="container">
		<div class="sec-title">
			<h2>Contact Us</h2>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="row mb-87 mb-xs-30">
					<div class="col-sm-6">
						<figure>
							<img class="contact-img" src="assets/images/contactus-img.jpg" alt="">
						</figure>
					</div>
					<div class="col-sm-6">
						<div class="contact-info">
							<div class="contact-address">
								<h4>Address</h4>
								<address>
									Mega medical Hospital,
									<br>
									Second steet, cohin, 665236
								</address>
							</div>
							<div class="contact-number">
								<h4>Phone Number</h4>
								<a href="tel:08145531751">08145531751</a>
								<a href="tel:07012572051">07012572051</a>

							</div>
							<div class="contact-email">
								<h4>Email</h4>
								<a href="mailto:precy1621@gmail.com">precy1621@gmail.com</a>
							</div>
						</div>
					</div>
				</div>
				<div class="form-sec">
					<div class="sec-title">
						<h2>Message Us</h2>
					</div>

					<div class="alert alert-success alert-msg" id="success" style="display: none">
						<strong>Thank You</strong> for using our template. Your message has been sent.
					</div>
					<form method="post" name="contactForm" novalidate id="contact">
						<div class="row mb-28">
							<div class="col-sm-6">
								<label>First Name</label>
								<input class="input-box" type="text" name="name" data-ng-model="formData.name" required="" data-ng-pattern = "/^[a-zA-Z]/" data-ng-class="{'error' : contactForm.name.$error.pattern && contactForm.$blured || contactForm.name.$invalid && successStatus}">
							</div>
							<div class="col-sm-6">
								<label>Last Name</label>
								<input class="input-box" type="text" name="lastname" data-ng-model="formData.lastname" required="" data-ng-pattern = "/^[a-zA-Z]/" data-ng-class="{'error' : contactForm.lastname.$error.pattern && contactForm.$blured || contactForm.lastname.$invalid && successStatus}">
							</div>
						</div>
						<div class="row mb-28">
							<div class="col-sm-6">
								<label>Email</label>
								<input class="input-box" type="email" name="email" required="" data-ng-model="formData.email" data-ng-pattern = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/" data-ng-class="{'error' : contactForm.email.$error.pattern && contactForm.$blured || contactForm.email.$invalid && successStatus}">
							</div>
							<div class="col-sm-6">
								<label>Phone</label>
								<input class="input-box" type="text" name="phoneNo" required="" data-ng-model="formData.phoneNo" data-ng-pattern = "/^[0-9]/" data-ng-class="{'error' : contactForm.phoneNo.$error.pattern && contactForm.$blured || contactForm.phoneNo.$invalid && successStatus}">
							</div>
						</div>
						<div class="row mb-28">
							<div class="col-sm-12">
								<label>Message</label>
								<textarea class="textarea" cols="5" rows="7" name="textarea" data-ng-model="formData.textarea" required="" data-ng-class="{'error' : contactForm.textarea.$error.required && contactForm.textarea.$blured || contactForm.textarea.$invalid && successStatus}"></textarea>
							</div>
						</div>
						<input class="btn" type="submit" value="submit now"	data-ng-click = "submitcotactusForm(contactForm.$invalid)">
					</form>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="medical-department">
					<div class="head-sec">
						<span>our medical</span>
						<h3>Departments</h3>
					</div>


					
					<div class="owl-demo-4 owl-theme">

						<?php 
						$query = "SELECT * FROM department";
						$result = mysqli_query($conn,$query);

						while ( $row = mysqli_fetch_assoc($result)) {

							@$i += 1;
							?>
							<div class="item slider-content">
								<figure>
									<img src="assets/images/<?php echo $row['icon'] ; ?>" alt="">
								</figure>
								<div class="slider-txt">
									<strong><?php echo $row['dept_name'] ; ?></strong>
								</div>
							</div>
						<?php } ?>
						<div class="item slider-content">
							<figure>
								<img src="assets/images/contactus-heart.png" alt="">
							</figure>
							<div class="slider-txt">
								<strong>Radiology</strong>
							</div>
						</div>
						<div class="item slider-content">
							<figure>
								<img src="assets/images/contactus-heart.png" alt="">
							</figure>
							<div class="slider-txt">
								<strong>Radiology</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="map-wrap">
						<div id="map-view"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer Section Starts-->

<?php 
include 'includes/footer.php';


?>
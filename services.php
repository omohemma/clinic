<?php 
include 'includes/header.php';
include 'hcms/includes/connection.php';


?>
<style type="text/css">
.text-clear, li{
	font-family: 'PT Serif', serif;
	font-size: 20px;
	font-weight: 400;
	line-height: 30px;
	margin-bottom: 10px;
	
}


</style>
<!--Header Section Ends-->
<div class="banner-section banner-image">
	
</div>
</div>
<div class="content padd-top padd-bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Our Services</h2>
			</div>
			<div class="col-sm-3">
				<ul class="nav nav-tabs nav-stacked tab-list">
					<li role="presentation" class="active">
						<a href="#heath-checkup" aria-controls="heath-checkup" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-55194"></i><span>Health Checkups</span></a>
					</li>
					<li role="presentation">
						<a href="#xray" aria-controls="xray" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-114176"></i><span>X-ray Scans</span></a>
					</li>
					<li role="presentation">
						<a href="#lab" aria-controls="lab" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-125005"></i><span>Laboratory Services</span></a>
					</li>
					<li role="presentation">
						<a href="#ambulance" aria-controls="ambulance" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-124977"></i><span>Ambulance Services</span></a>
					</li>
					<li role="presentation">
						<a href="#patient" aria-controls="patient" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-73378"></i><span>Patient Support Service</span></a>
					</li>
					<li role="presentation">
						<a href="#child-care" aria-controls="child-care" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-12149"></i><span>Child Care Services</span></a>
					</li>
					<li role="presentation">
						<a href="#optical-services" aria-controls="optical-services" role="tab" data-toggle="tab"> <i class="helicopter"> <img src="assets/svg/chopper.svg" alt="" class="svg" /></i><span>Optical Services</span></a>
					</li>
				</ul>
				<div class="medical-slides">

					<?php 
					$query = "SELECT * FROM department";
					$result = mysqli_query($conn,$query);

					while ( $row = mysqli_fetch_assoc($result)) {

						@$i += 1;
						?>
						<div class="medical-item">
							<span>our medical</span>
							<h3>Departments</h3>
							<img src="assets/images/<?php echo $row['icon'] ; ?>" alt="" />
							<h4><?php echo $row['dept_name'] ; ?></h4>
						</div>

					<?php } ?>
				</div>
			</div>
			<div class="col-sm-8 col-sm-offset-1">
				<section class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="heath-checkup">
						<h4>Health Checkups</h4>
						<br><br>
						<img src="assets/images/services-1.jpg" alt="" />
						<br><br>
						<p class="text-clear text-justify">
							At HCMS, we strongly believe in potential care. By taking control of your health and being aware of any potential risks associated with your current lifestyle or family medical history, you are in a better position to ensure that you say in tip-top health, manage and even reverse any previous undiagnosed health issues. 


						</p>

						<p class="text-clear text-justify">
							Not any health problems show symptoms in their early stages, which is why we offer a range of health screening programmes, tailored to your individual health needs. Our experienced medical team will be advising on the appropriate screening package for you.
						</p>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="xray">
						<h4>X-Ray Scans</h4>
						<br>
						<img src="assets/images/services-1.jpg" alt="" />
						<br><br>
						<p class="text-clear text-justify">
							At St. Luke Hospital we have one fixed combination. Radiographic/Fluroscopic (R&F) unit and one mobile radiographic unit. These units are used in a variety of ways to include orthopaedic (Bone) imaging to studies of the upper gastrointestinal region (Upper GI). 
						</p>

						<p class="text-clear text-justify">The mobile x-ray unit is used to provide imaging at the patient’s bedside, in the Emergency room and, on occasion, in the operating room.</p>
						

					</p>
					<br>
					<h5>Patient Benefits</h5>
					<br>
					<ul>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Automated dose-reduction features.
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Breathing lights help patients remain motionless during scan.
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Clear images aid improved patient diagnosis
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Fast, accurate scan times mean faster patient exams
						</li>

					</ul>

				</div>
				<div role="tabpanel" class="tab-pane fade" id="lab">
					<h4>Laboratory Services</h4>
					<br>
					<img src="assets/images/services-1.jpg" alt="" />
					<br><br>
					<p class="text-clear text-justify">
					Laboratory service offers a well-equipped auto analyzers with lab interfacing and integrated system for analysis of patient’s samples. We have a multitude of speciality departments catering to both routine and special diagnostic requirements of the hospital. </p>

					<p class="text-clear text-justify">At HCMS, we strive to deliver high quality and affordable laboratory diagnostic and consultative that are crucial to outstanding patient care.</p>

					
					
					

				</div>
				<div role="tabpanel" class="tab-pane fade" id="ambulance">
					<h4> Ambulance service</h4>
					<br>
					<img src="assets/images/services-1.jpg" alt="" />
					<br><br>
					<p class="text-justify text-clear">
						HCMS has the reputation of being one of the fastest responding hospitals in an emergency. Whether it is an heart attack, ruptured appendix, sudden diabetic coma or a traumatic accident, it is possibly the safest place to come to for prompt medical attention. This service is readily available and fully equipped to carry out any procedures. This department is geared to face challenges of the paediatrics age groups. 
					</p>



				</div>
				<div role="tabpanel" class="tab-pane fade" id="patient">
					<h4>Patient Support Service</h4>
					<br>
					<img src="assets/images/services-1.jpg" alt="" />
					<br><br>
					<p class="text-clear text-justify">The support services does the following</p>:
					

					<ul>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Advise and support patients, their families and carers
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Provide information about NHS services
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i>listen to your concerns, suggestions and compliments 
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Help sort out problems quickly on your behalf
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Help you identify what you know
						</li>
					</ul>

				</div>
				<div role="tabpanel" class="tab-pane fade" id="child-care">
					<h4>Child Care Services</h4>
					<br>
					<img src="assets/images/services-1.jpg" alt="" />
					<br><br>
					<p class="text-clear text-justify">HCMS offers a very good and adequate child care services to the local community, providing a high quality child care services with an educational and developmental focus. The center provides a creative environment in which your child’s talents and personality will flourish. We have the following features:</p>


					<ul>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Skilled And Caring Staff
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Nutritious Meals And Snacks
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Infant/toddler Program
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Toddler-option Program
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> The Preschool Program
						</li>
					</ul>

				</div>
				<div role="tabpanel" class="tab-pane fade" id="optical-services">
					<h4>Optical Services</h4>
					<br>
					<img src="assets/images/services-1.jpg" alt="" />
					<br><br>
					<p class="text-justify text-clear">
						Using ultra-modern equipment, we provide comprehensive eye examination and testing, we also provide a wide range of lenses, frames, and accessories as well.
					</p>
					<p class="text-justify text-clear">
						Services include:
					</p>

					<ul>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Eye Examination
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Specialist Consultation
						</li>
						<li>
							<i class="fa fa-caret-right" aria-hidden="true"></i>	Opticals 
						</li>
						
					</ul>

				</div>
			</section>
		</div>
	</div>
</div>
</div>
<!-- <div class="testimonial-section padd-top">
	<div class="container">
		<div class="text-center">
			<h2>Testimonials</h2>
		</div>

		<div id="owl-demo-2" class="owl-carousel owl-theme">
			<div class="item">
				<div class="quote-tabs">
					<div id="tabs-6">
						<blockquote class="testimonial-quotes">

							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<div id="tabs-7">
						<blockquote class="testimonial-quotes">

							second Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<ul class="quote-next">

						<li>
							<a href="#tabs-6" class="client-quote-1"> <img src="assets/images/test-client-1.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>
						<li>
							<a href="#tabs-7" class="client-quote-1"><img src="assets/images/test-client-2.jpg" alt="image" /> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>

					</ul>
				</div>
			</div>
			<div class="item">
				<div class="quote-tabs">
					<div id="tabs-8">
						<blockquote class="testimonial-quotes">
							third Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<div id="tabs-9">
						<blockquote class="testimonial-quotes">
							fourth Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<ul class="quote-next">

						<li>
							<a href="#tabs-8" class="client-quote-1"> <img src="assets/images/event-2.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>
						<li>
							<a href="#tabs-9" class="client-quote-1"><img src="assets/images/event-1.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>

					</ul>
				</div>
			</div>
			<div class="item">
				<div class="quote-tabs">
					<div id="tabs-10">
						<blockquote class="testimonial-quotes">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<div id="tabs-11">
						<blockquote class="testimonial-quotes">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<ul class="quote-next">

						<li>
							<a href="#tabs-10" class="client-quote-1"> <img src="assets/images/event-2.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>
						<li>
							<a href="#tabs-11" class="client-quote-1"><img src="assets/images/event-1.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>

					</ul>
				</div>
			</div>
			<div class="item">
				<div class="quote-tabs">
					<div id="tabs-12">

						<blockquote class="testimonial-quotes">

							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
						</blockquote>
					</div>

					<div id="tabs-13">
						<blockquote class="testimonial-quotes">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy
							text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting
						</blockquote>
					</div>

					<ul class="quote-next">

						<li>
							<a href="#tabs-12" class="client-quote-1"> <img src="assets/images/test-client-1.jpg" alt="image"/> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>
						<li>
							<a href="#tabs-13" class="client-quote-1"><img src="assets/images/test-client-2.jpg" alt="image" /> </a>
							<span class="client-details"> <span class="client-name">client name</span> <span class="client-des doctor-title">Designation</span></span>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div> -->

<?php 
include 'includes/footer.php';


?>
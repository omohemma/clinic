<?php 
include 'includes/header.php';
include 'hcms/includes/connection.php';


?>
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
						<a href="#insurance-policy" aria-controls="insurance-policy" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-114176"></i><span>Insurance Policy</span></a>
					</li>
					<li role="presentation">
						<a href="#lab" aria-controls="lab" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-125005"></i><span>Lab teasts &amp; Scans</span></a>
					</li>
					<li role="presentation">
						<a href="#ambulance" aria-controls="ambulance" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-124977"></i><span>24 Hr. Ambulance service</span></a>
					</li>
					<li role="presentation">
						<a href="#patient" aria-controls="patient" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-73378"></i><span>Patient Support Service</span></a>
					</li>
					<li role="presentation">
						<a href="#diet" aria-controls="diet" role="tab" data-toggle="tab"> <i class="service-icon flaticon-icon-12149"></i><span>Diet center &amp; coffee shop</span></a>
					</li>
					<li role="presentation">
						<a href="#helicopter" aria-controls="helicopter" role="tab" data-toggle="tab"> <i class="helicopter"> <img src="assets/svg/chopper.svg" alt="" class="svg" /></i><span>helicopter ambulance</span></a>
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
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
						</p>
						<img src="assets/images/services-1.jpg" alt="" />
						<p>
							Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="insurance-policy">
						<h4>insurance policy</h4>
						<img src="assets/images/services-1.jpg" alt="" />
						<p>
							Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="lab">
						<h4>Lab teasts &amp; Scans</h4>
						<p>
							Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<img src="assets/images/services-1.jpg" alt="" />
						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="ambulance">
						<h4>24 Hr. Ambulance service</h4>
						<p>
							Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>

						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="patient">
						<h4>Patient Support Service</h4>
						<img src="assets/images/services-1.jpg" alt="" />

						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="diet">
						<h4>Diet center &amp; coffee shop</h4>
						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="helicopter">
						<h4>helicopter ambulance</h4>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
						</p>
						<p>
							Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<ul>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Morbi molestie lectus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Integer auctor tortor et faucibus
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Sed vel felis luctusfermentum
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Consectetur consequat.
							</li>
							<li>
								<i class="fa fa-caret-right" aria-hidden="true"></i> Ignissim velit eu nunc iaculis
							</li>
						</ul>

					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="testimonial-section padd-top">
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
</div>

<?php 
include 'includes/footer.php';


?>
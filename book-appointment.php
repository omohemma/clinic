<?php 
include 'includes/header.php';


?>
<div class="banner-section banner-image">

</div>
<div class="content">
	<div class="container padd-top padd-bottom">
		<div class="text-center">
			<h2>Book your appointment</h2>
		</div>
		<form action="#" method="get" class="about-form info-form">
			<div class="info-heading-icon">
				<h4>Personal Information</h4>
			</div>
			<ul class="row info">
				<li class="col-sm-4">
					<span class="form-title">First Name</span>
					<input type="text" class="form-part" />
				</li>
				<li class="col-sm-4">
					<span class="form-title">last Name</span>
					<input type="text" class="form-part" />
				</li>
				<li class="col-sm-4">
					<span class="form-title">age</span>
					<input type="text" class="form-part" />
				</li>
				<li class="col-sm-4">
					<span class="form-title">sex</span>
					<span class="info-holder">
						<select class="form-part">
							<option>-select sex-</option>
							<option>-select sex-</option>
							<option>-select sex-</option>
						</select><span class="info-arrow"> </span></span>
					</li>
					<li class="col-sm-8">
						<span class="form-title">address</span>
						<input type="text" class="form-part" />
					</li>
					<li class="col-sm-4">
						<span class="form-title">country</span>
						<span class="info-holder">
							<select class="form-part">
								<option>-select country-</option>
								<option>-select country-</option>
								<option>-select country-</option>
							</select><span class="info-arrow"> </span></span>
						</li>
						<li class="col-sm-4">
							<span class="form-title">state</span>
							<span class="info-holder">
								<select class="form-part">
									<option>-select state-</option>
									<option>-select state-</option>
									<option>-select state-</option>
								</select><span class="info-arrow"> </span></span>
							</li>
							<li class="col-sm-4">
								<span class="form-title">city</span>
								<span class="info-holder">
									<select class="form-part">
										<option>-select city-</option>
										<option>-select city-</option>
										<option>-select city-</option>
									</select> <span class="info-arrow"> </span></span>
								</li>
								<li class="col-sm-4">
									<span class="form-title">phone/mobile</span>
									<input type="tel" class="form-part" />
								</li>
								<li class="col-sm-4">
									<span class="form-title">email address</span>
									<input type="email" class="form-part" />
								</li>
							</ul>
							<div class="info-heading-icon two">
								<h4>Appointment Schedule</h4>
							</div>
							<ul class="row info">
								<li class="col-sm-4">
									<span class="form-title">department</span>
									<span class="info-holder">
										<select class="form-part">
											<option>-select department-</option>
											<option>-select department-</option>
											<option>-select department-</option>
										</select> <span class="info-arrow"> </span> </span>
									</li>
									<li class="col-sm-4">
										<span class="form-title">prefered doctor</span>
										<span class="info-holder">
											<select class="form-part">
												<option>-select doctor-</option>
												<option>-select doctor-</option>
												<option>-select doctor-</option>
											</select> <span class="info-arrow"> </span> </span>
										</li>
										<li class="col-sm-4">
											<span class="form-title">Appointment Date</span>
											<input type="text" class="form-part date-pick" />
										</li>
									</ul>
									<div class="info-heading-icon three">
										<h4>Medical Problem</h4>
									</div>
									<ul class="row">
										<li class="col-sm-6">
											<span class="form-title">Your Problem</span>
											<textarea class="form-part info-message"></textarea>
										</li>
										<li class="col-sm-6">
											<span class="form-title">Remark</span>
											<textarea class="form-part info-message"></textarea>
										</li>
									</ul>
									<div class="text-left">
										<input type="submit" class="btn btn-submit" value="get an appointment" />
									</div>
								</form>
							</div>
						</div>
						
						<?php 
						include 'includes/footer.php';


						?>
<?php 
include 'includes/header.php';
include 'hcms/includes/connection.php';


?>
<!--Header Section Ends-->
<div class="banner-section banner-image">
	<div class="container gallery">
		
	</div>
</div>
<div class="content padd-top padd-bottom">
	<div class="container">
		<div class="text-left col-manage-section common-padd-bottom">
			<h2>our doctors</h2>
			<span class="col-manage"> <span class="dots-three"> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> </span> <span class="dots-two active-col"> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> </span> </span>
		</div>

		<div class="select-section">
			<div class="select-heading">
				<h4>Search Doctors <span class="sub-heading">by department</span></h4>
			</div>
			<form method="get"  class="category-form">
				<span class="select-holder">
					<select name="dept">
						<option selected="" disabled="">select department</option>

						<?php 
						$query = "SELECT * FROM department";
						$result = mysqli_query($conn,$query);

						while ( $row = mysqli_fetch_assoc($result)) {


							?>
							<option value="<?php echo $row['dept_slug']; ?>"><?php echo $row['dept_name']; ?></option>
						<?php } ?>
					</select> <span class="select-arrow"></span> </span>
					<input type="submit" value="search now" class="select-search"/>
				</form>
			</div>
			<div class="row">


				<?php 

				if (!isset($_GET['dept'])) {

					$query = "SELECT * FROM users WHERE role = 'doctor' LIMIT 9";
					$result = mysqli_query($conn,$query);

					while ( $row = mysqli_fetch_assoc($result)) {

						@$i += 1;
						?>
						<div class="col-sm-4 zoom col-section">
							<figure class="grid-fig"><img src="assets/images/dr-grid-5.jpg" alt="<?php echo $row['title']." ".$row['lname'] ; ?>" class="img-responsive"/>
							</figure>
							<article class="grid-details">
								<h4><?php echo $row['title']." ".$row['lname'] ; ?></h4>
								<span class="dr-des"><?php echo $row['speciality']; ?></span>
								<p>
									<?php echo substr($row['about'], 0, 100)." ..." ; ?>
								</p>
								<a  class="btn" href="doctor-details.php?d=<?php echo $row['id']; ?>">view profile</a>
							<!-- <form method="post" action="doctor-details.php">
								<input type="text" name="id" value="<?php echo $row['id']; ?>">
								<button class="btn" name="view">view profile</button> 
							</form> -->
							
						</article>
					</div>
				<?php }}else{
					include 'hcms/includes/functions.php';
					$query =  reverseURL($_GET["dept"]);


					$query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;

					$query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection

					$raw_results = mysqli_query($conn,"SELECT * FROM users
						WHERE (`speciality` LIKE '%".$query."%')");

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

        	while($row = mysqli_fetch_assoc($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop


        		?>

        		<div class="col-sm-4 zoom col-section">
        			<figure class="grid-fig"><img src="assets/images/dr-grid-5.jpg" alt="<?php echo $row['title']." ".$row['lname'] ; ?>" class="img-responsive"/>
        			</figure>
        			<article class="grid-details">
        				<h4><?php echo $row['title']." ".$row['lname'] ; ?></h4>
        				<span class="dr-des"><?php echo $row['speciality']; ?></span>
        				<p>
        					<?php echo substr($row['about'], 0, 100)." ..." ; ?>
        				</p>
        				<a  class="btn" href="doctor-details.php?d=<?php echo $row['id']; ?>">view profile</a>
							<!-- <form method="post" action="doctor-details.php">
								<input type="text" name="id" value="<?php echo $row['id']; ?>">
								<button class="btn" name="view">view profile</button> 
							</form> -->
							
						</article>
					</div>
				<?php }
			}else{ // if there is no matching rows do following
				echo "<h3 class='text-center text-info mb-5 font-weight-bold'>No results</h3>";
			}

		}

		?>
	</div>
			<!-- <div class="text-center pagi-nav">
				<a href="#" class="pagination-number active-section">1</a>
				<a href="#" class="pagination-number">2</a>
				<a href="#" class="pagination-number">3</a>
			</div> -->
		</div>
	</div>
	
	<?php 
	include 'includes/footer.php';


	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PetCare</title>
	<link rel="stylesheet" href="/css/home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// booking 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pet_name = $_POST['pet_name'];
		$pet_type = $_POST['pet_type'];
		$service_type = $_POST['service_type'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$con = mysqli_connect("localhost", "root", "", "petcare");
		$query = "INSERT INTO schedule (name,email,phone,pet_name,pet_type,service_type,date,time) VALUES('$name','$email','$phone','$pet_name','$pet_type','$service_type','$date','$time')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo ("Scheduled");
			header("location:scheduled.php");
		} else {
			echo ("Schedule Failed");
		}
	}
	?>
	<nav class="navbar background h-nav-resp">
		<div class="logo">
			<h2>PetCare</h2>
		</div>
		<ul class="nav-list v-class-resp">
			<li><a href="#home">Home</a></li>
			<li><a href="#bookings">Bookings</a></li>
			<li><a href="#products">Products</a></li>
			<li><a href="#aboutus">About Us</a></li>
			<li><a href="#contactus">Contact Us</a></li>
		</ul>
		<div class="burger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</nav>
	<!-- home section  -->
	<section class="background firstsection" id="home">
		<h1>Services</h1>
		<div class="box-main">
			<div class="card-services-container">
				<div class="card-services-card">
					<img src="/img/grooming.jpg" alt="grooming">
					<h3>Grooming</h3>
					<p>"We offer professional grooming services for pets, including bathing, trimming, and styling. Our experienced groomers ensure that your furry friend looks and feels their best. Schedule an appointment today!"</p>
					<a href="#bookings">Schedule Now</a>
				</div>

				<div class="card-services-card">
					<img src="/img/poolsessions.jpg" alt="poolsessions">
					<h3>Pool Sessions</h3>
					<p>"We offer pool sessions for pets to provide them with a fun and safe way to exercise and cool down during hot weather. Come enjoy our supervised and sanitized pool with your furry friend!"</p>
					<a href="#bookings">Schedule Now</a>
				</div>

				<div class="card-services-card">
					<img src="/img/daycare.jpg" alt="Card 3">
					<h3>DayCare</h3>
					<p>"We offer a fun and safe daycare environment for pets, including playtime, socialization, and exercise. Our trained staff provide individual attention to each pet. Book your pet's stay today!"</p>
					<a href="#bookings">Schedule Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/dayout.jpg" alt="Card 3">
					<h3>Day Out</h3>
					<p>"We offer day-out sessions for pets to enjoy a change of scenery, exercise, and socialization. Our trained staff ensures a safe and fun experience for your furry friend. Schedule a day-out today!"</p>
					<a href="#bookings">Schedule Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/boarding.jpg" alt="Card 3">
					<h3>Boarding</h3>
					<p>"We offer comfortable and secure boarding for pets, including food, bedding, and individual attention. Our experienced staff ensure that your furry friend is well-cared for. Reserve your pet's stay today!"</p>
					<a href="#bookings">Schedule Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/games.jpg" alt="Card 3">
					<h3>Physical Activites</h3>
					<p>"We offer a variety of fun games, contests, and physical activities for pets, including agility courses and playtime. Our trained staff ensure a safe and enjoyable experience for your furry friend."</p>
					<a href="#bookings">Schedule Now</a>
				</div>
			</div>
		</div>
	</section>

	<!-- booking section  -->
	<section class="background secondsection" id="bookings">
		<h1>Bookings</h1>
		<div class="box-main">
			<div class="form-container">
				<form action="" method="POST">
					<h3>Schedule here!</h3>
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" id="name" name="name" placeholder="Enter your full name" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" placeholder="Enter you Email Address" required>
					</div>
					<div class="form-group">
						<label for="phone">Contact Number</label>
						<input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" required>
					</div>
					<div class="form-group">
						<label for="pet_name">Pet's Name</label>
						<input type="tel" id="pet_name" name="pet_name" placeholder="What is our furry friend's name? " required>
					</div>
					<div class="form-group">
						<label for="pet-select">What pet do you have?</label>
						<select id="pet-select" name="pet_type">
							<option value="Dog">Dog</option>
							<option value="Cat">Cat</option>
							<option value="Bird">Bird</option>
							<option value="Fish">Fish</option>
							<option value="Rabbit">Rabbits</option>
						</select>
					</div>
					<div class="form-group">
						<label for="service_type">Which service you want to avail?</label>
						<select id="service_type" name="service_type" placeholder="Choose service">
							<option value="Grooming">Grooming</option>
							<option value="Pool Sessions">Pool Sessions</option>
							<option value="Boarding">Boarding</option>
							<option value="Day Care">Day Care</option>
							<option value="Day Out">Day Out</option>
							<option value="Games">Games</option>
						</select>
					</div>
					<div class="form-group">
						<label for="date">Choose a date:</label>
						<input type="date" id="date" name="date">
					</div>
					<div class="form-group">
						<label for="time">Choose a time:</label>
						<input type="time" id="time" name="time">
					</div>
					<button type="submit">Schedule</button>
				</form>
			</div>
		</div>
	</section>
	<!-- products section  -->
	<section class="background thirdsection" id="products">
		<h1>Products</h1>
		<div class="box-main">
			<div class="card-container">
				<div class="card">
					<img src="/img/drools.jpg" alt="Product 1">
					<div class="card-content">
						<h3 class="card-title">Drools Chicken and Egg Adult Dry Dog Food - 18kg (15kg + 3kg Free Inside)</h3>
						<p class="card-description">Dog Drools offers premium pet food with nutritionally balanced ingredients for optimal health and wellbeing of your furry friend.</p>
						<p class="card-price">&#8377; 2500</p>
					</div>
				</div>
				<div class="card">
					<img src="/img/pedigree.jpg" alt="Product 2">
					<div class="card-content">
						<h3 class="card-title">Pedigree Adult Dry Dog Food, Chicken & Vegetables Flavour, 10kg Pack</h3>
						<p class="card-description">Pedigree provides complete and balanced dog food with high-quality protein and essential nutrients to support overall health and vitality.</p>
						<p class="card-price">&#8377; 2031</p>
					</div>
				</div>
				<div class="card">
					<img src="/img/drycatfood.jpg" alt="Product 3">
					<div class="card-content">
						<h3 class="card-title">Whiskas Kitten Dry Cat Food (2-12 Months), Ocean Fish with Milk Flavour, 3kg Pack/h3>
							<p class="card-description">Our dry cat food provides complete and balanced nutrition with high-quality protein, vitamins, and minerals to support your cat's overall health.</p>
							<p class="card-price">&#8377; 999</p>
					</div>
				</div>
				<div class="card">
					<img src="/img/fish1.jpg" alt="Product 4">
					<div class="card-content">
						<h3 class="card-title">BOLTZ Adult Granule Fish Food for Growth & Health, Nutritionist Choice (400 GM)</h3>
						<p class="card-description">Our dry cat food provides complete and balanced nutrition with high-quality protein, vitamins, and minerals to support your cat's overall health.</p>
						<p class="card-price">&#8377; 249</p>
					</div>
				</div>
				<div class="card">
					<img src="/img/royalcanincat.jpg" alt="Product 5">
					<div class="card-content">
						<h3 class="card-title">Royal Canin Persian Adult Dry Cat Food, Meat Flavor 4 Kg</h3>
						<p class="card-description">Our cat food provides complete and balanced nutrition with high-quality protein, vitamins, and minerals to support your cat's overall health.</p>
						<p class="card-price">&#8377; 3780</p>
					</div>
				</div>
				<div class="card">
					<img src="/img/rabbit1.jpg" alt="Product 6">
					<div class="card-content">
						<h3 class="card-title">unai Pillu Alfalfa Dried Hay for Rabbit, Hamsters, Guinea Pigs and White Mice (Alfalfa Hay - 500g)</h3>
						<p class="card-description">Our rabbit food provides complete and balanced nutrition with high-quality protein, vitamins, and minerals to support your cat's overall health.</p>
						<p class="card-price">&#8377; 485</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- about us section  -->
	<section class="background fourthsection about-section" id="aboutus">
		<h1>About Us</h1>
		<div class="box-main">
			<div class="about-container">
				<div class="about-item">
					<div class="about-text">
						<h1>Our Story</h1>
						<p>At PetCare our passion for pets has been driving us since day one. Determined to provide the best for all pets, we started researching and experimenting with different formulations.Years of hard work and dedication later, we have become one of the leading pet care brands in the market, with a range of products that cater to the specific needs of dogs, cats, bird, and other furry companions. From premium-quality food and treats to grooming and healthcare essentials, we offer everything pet owners need to keep their pets happy and healthy.But our journey doesn't stop here. We continue to innovate and push the boundaries of pet care, driven by our love for animals and our commitment to their well-being. Join us in our mission to make the world a better place for pets, one product at a time.</p>
					</div>
					<div class="about-image">
						<img src="/img/cat.jpg" alt="Image 1">
					</div>
				</div>
				<div class="about-item">
					<div class="about-image">
						<img src="/img/bird.jpg" alt="Image 2">
					</div>
					<div class="about-text">
						<h1>Our Mission</h1>
						<p>At PetCare, our mission is to provide pets with the best possible care and nutrition. We believe that every pet deserves to be happy and healthy, and we're committed to making that a reality.

							To achieve our mission, we use only the highest-quality ingredients and the latest scientific research to develop our products. We work closely with veterinarians and pet care experts to ensure that our products meet the specific needs of pets at every stage of life.

							But our mission goes beyond just making great products. We're also dedicated to educating pet owners about the importance of proper nutrition, grooming, and healthcare. We believe that by working together, we can help pets live longer, healthier lives.</p>
					</div>
				</div>
				<div class="about-item">
					<div class="about-text">
						<h1>Our Values</h1>
						<p>We are a community of pet lovers, committed to providing high-quality pet care products. We believe in honesty, passion, innovation, responsibility, and building a strong pet-loving community.At our core, we are dedicated to improving the lives of pets and their owners. We strive to create a positive impact on the world by promoting responsible pet ownership, supporting animal welfare organizations, and providing educational resources to pet owners. Our values guide every aspect of our business, from the products we create to the way we interact with our customers and community.</p>
					</div>
					<div class="about-image">
						<img src="/img/dog.jpg" alt="Image 3">
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- contact us section  -->
	<section class="background fifthsection" id="contactus">
		<h1>Contact Us</h1>
		<div class="box-main">
			<div class="form-container">
				<form action="contacted.php" method="POST">
					<h3>Contact Us!</h3>
					<div class="form-group">
						<label for="name1">Full Name</label>
						<input type="text" id="name1" name="name1" placeholder="Enter your full name" required>
					</div>
					<div class="form-group">
						<label for="email1">Email</label>
						<input type="text" id="email1" name="email1" placeholder="Enter you Email Address" required>
					</div>
					<div class="form-group">
						<label for="message1">Message/Queries</label>
						<textarea id="message1" name="message1" placeholder="Enter your message here" required></textarea>
					</div>
					<button type="submit">Send</button>
				</form>
			</div>
		</div>
	</section>
	<!-- footer  -->
	<section class="footer">

		<div class="box-container">

			<div class="box">
				<h2>PetCare</h2>
				<p> Thank you for reaching us</p>
				<p class="links"><i class="fas fa-clock"></i>Monday - Saturday</p>
				<p class="days">6:00AM - 12:00PM</p>
			</div>

			<div class="box">
				<h3>Contact Info</h3>
				<a href="tel:+919777024404" class="links"><i class="fas fa-phone"></i> 9777024404</a>
				<a href="tel:+918260960631" class="links"><i class="fas fa-phone"></i> 8260960631</a>
				<a href="mailto:patelanish081@gmail.com" class="links"><i class="fas fa-envelope"></i> patelanish081@gmail.com</a>
				<a href="https://goo.gl/maps/p3LpvEMURTvswfEr9" class="links"><i class="fas fa-map-marker-alt"></i> Bengaluru, Karnataka</a>
			</div>

			<div class="box">
				<h3>Quick Links</h3>
				<a href="#home" class="links"> <i class="fas fa-arrow-right"></i>Home</a>
				<a href="#bookings" class="links"> <i class="fas fa-arrow-right"></i>Bookings</a>
				<a href="#products" class="links"> <i class="fas fa-arrow-right"></i>Products</a>
				<a href="#aboutus" class="links"> <i class="fas fa-arrow-right"></i>About Us</a>
				<a href="#contactus" class="links"> <i class="fas fa-arrow-right"></i>Contact Us</a>
			</div>

			<div class="box">
				<h3>Newsletter</h3>
				<p>Subscribe for latest updates</p>
				<input type="email" placeholder="Your Email" class="email">
				<a href="#" class="btn">Subscribe</a>
				<div class="share">
					<h3>Follow Us</h3>
					<a href="https://www.facebook.com/profile.php?id=100007724685718" target="blank" class="fab fa-facebook-f"></a>
					<a href="https://twitter.com/akp_4404" class="fab fa-twitter" target="blank"></a>
					<a href="https://www.instagram.com/__akp__17/" class="fab fa-instagram" target="blank"></a>
					<a href="https://www.linkedin.com/in/anish-kumar-patel-a8821b241/" target="blank" class="fab fa-linkedin"></a>
					<a href="https://github.com/akp-development-17" target="blank" class="fab fa-github"></a>
				</div>
			</div>

		</div>

		<div class="credit">&#169; 2023 PetsCare. All rights reserved by <a href="#" class="link">AKP</a></div>

	</section>

	<script>
		burger = document.querySelector(".burger");
		navbar = document.querySelector(".navbar");
		navList = document.querySelector(".nav-list");

		burger.addEventListener("click", () => {
			navList.classList.toggle("v-class-resp");
			navbar.classList.toggle("h-nav-resp");
		});
	</script>
</body>

</html>
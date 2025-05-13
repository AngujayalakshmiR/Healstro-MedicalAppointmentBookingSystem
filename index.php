<?php
session_start(); // Start the session to access success or error message
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>Healstro</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png" style="background-color: white;">
		 <!-- Include SweetAlert2 CSS -->
         <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<style>
.callbtn{
	background-color: #ed803a;
	border: solid 2px #ed803a;
	color: white;
	padding: 4px 8px;
	border-radius: 10px;
}
.callbtn:hover{
	background-color: #ffffff;
	border: solid 2px #ed803a;
	color: #ed803a;
}
html {
            scroll-behavior: smooth;
        }
		/* Modal styling */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 999;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fff;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    border-radius: 8px;
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.mobile-nav .slicknav_menu:nth-child(1),
.mobile-nav .slicknav_menu:nth-child(2) {
    display: none;
}
/* Hide the nice-select dropdown in SweetAlert2 */
.swal2-container .nice-select {
    display: none !important;
}
div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm) {
    background-color: #0073a8 !important;
    border-color: #0073a8 !important;
    color: white !important;
}

		</style>
    </head>
    <body>

<?php
// Check if there is a success message in the session
if (isset($_SESSION['success_message'])) {
    echo "<script type='text/javascript'>
            Swal.fire({
                title: 'Success!',
                text: '" . $_SESSION['success_message'] . "',
                icon: 'success',
                confirmButtonText: 'OK',
                showCancelButton: false,  // Ensure no cancel button
                showConfirmButton: true,  // Ensure the confirm button is visible
                focusConfirm: true,  // Ensure focus is on the confirm button
            });
          </script>";
    unset($_SESSION['success_message']); // Clear the success message after it is displayed
}
?>


		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><button onclick="makeCall('+919384967176')" class="callbtn">Emergency Helpline</button></li>
								<li><button onclick="makeCall('+919384967176')" class="callbtn">Healstro Lifeline</button></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								
								<li><i class="fa fa-envelope"></i><a href="mailto:support@healstro.com">support@healstro.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#" style="margin-top: 0px;"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
								
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu" >
											<li class="active" ><a href="index.php" style="color:#2C2D3F;font-size:12px;">Home</a>
											</li>
											<li><a href="#services" style="color:#2C2D3F;font-size:12px;">Services </a></li>
											<li><a href="#centre" style="color:#2C2D3F;font-size:12px;">Centre of Excellence </a></li>
											<li><a href="#doctors" style="color:#2C2D3F;font-size:12px;">Doctors </a></li>
											<li><a href="#blogs" style="color:#2C2D3F;font-size:12px;">Blogs </a></li>
											<li><a href="viewAppointments.php" style="color:#2C2D3F;font-size:12px;">View Appointment</a></li>
											<!--<li><a href="contact.html" class="active">Contact Us</a></li>-->
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="#appointment" class="btn" style="font-size:12px;">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section class="slider" >
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> A <span>Holistic Approach</span> to <span style="color: #ed803a;">Health</span> and <span style="color: #ed803a;">Wellness</span> for All</h1>
									<p>Beyond treatment, we focus on your overall well-being. Healstro supports you with advanced care and compassionate support on your healing journey.
									</p>
									<div class="button">
										<a href="#appointment" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Committed to Providing <span>Exceptional</span> <span style="color: #ed803a;">Care</span> for Every Patient</h1>
									<p>Healstro offers personalized healthcare solutions to meet your unique needs. Experience world-class medical care that puts your health first.
									</p>
									<div class="button">
										<a href="#appointment" class="btn">Get Appointment</a>
										<a href="#services" class="btn primary">Our Services</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><span>Emergency</span> <span style="color: #ed803a;">Medical Services</span> Available Anytime, Anywhere You Need</span></h1>
									<p>Our dedicated emergency team is ready 24/7 to provide critical care and support. Trust Healstro for fast, life-saving interventions.</p>
									<div class="button">
										<a href="#appointment" class="btn">Get Appointment</a>
										<a href="tel:+919384967176" class="btn primary">Contact Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>24/7 Medical Assistance</span>
										<h4>Always ready to serve, any time, any day</h4>
										<p>Emergency services available 24/7, ensuring immediate support.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Tailored Care for Patient’s Needs</span>
										<h4>Individualized care paths crafted by specialists</h4>
										<p>Specialized clinics for chronic conditions and wellness.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Convenient Hours to consult</span>
										<h4>Flexible scheduling</h4>
										<ul class="time-sidual">
											<li class="day">Weekdays <span>8:00 AM - 8:00 PM</span></li>
											<li class="day">Saturday <span>9:00 AM - 6:30 PM</span></li>
											<li class="day">Sunday <span>9:00 AM - 3:00 PM</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				
			</div>
		</section> -->
		<!--/ End Feautes -->
		
		
		
		<!-- Start Why choose -->
		<section class="why-choose " id="services" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Comprehensive Services to Improve Your Health</h2>
							<img src="img/section-img.png" alt="#">
							<p>At <b>Healstro Multispeciality Hospital</b>, we prioritize your well-being with a range of expert medical services. From routine care to advanced treatments, our dedicated specialists ensure you receive the best care possible.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p><b>Healstro</b> is a state-of-the-art multispeciality hospital committed to delivering exceptional healthcare across diverse fields. Our expert teams in <b>dermatology, ophthalmology, cardiology, neurology, and oncology</b> work together to provide holistic, patient-centered care.</p>
							<p>With cutting-edge technology and compassionate service, we aim to redefine healthcare standards. Our approach focuses not just on treatment but also on preventive care and long-term wellness.</p>
							
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Personalized treatments for every patient</li>
										<li><i class="fa fa-caret-right"></i>Leaders in multiple medical fields</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Compassionate, patient-first healthcare approach</li>
										<li><i class="fa fa-caret-right"></i>Cutting-edge tools and diagnostics</li>
									</ul>
								</div>
							</div>
							
						</div>
						
						<!-- End Choose Left -->
					</div>
					
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<iframe width="560" height="315" src="https://www.youtube.com/embed/ue7pfa7wcDg?si=IK1hEwo3Vky8q3SB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="video video-popup mfp-iframe"></iframe>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div><br><br><br>
					<section class="Feautes section">
					<div class="row">
						<div class="col-lg-4 col-12">
							<!-- Start Single features -->
							<div class="single-features">
								<div class="signle-icon">
									<i class="icofont icofont-ambulance-cross"></i>
								</div>
								<h3>Emergency Help</h3>
								<p>Immediate, 24/7 critical care and support for life-threatening situations. Trust Healstro to provide prompt medical attention when it matters most.</p>
							</div>
							<!-- End Single features -->
						</div>
						<div class="col-lg-4 col-12">
							<!-- Start Single features -->
							<div class="single-features">
								<div class="signle-icon">
									<i class="icofont icofont-medical-sign-alt"></i>
								</div>
								<h3>Enriched Pharmacy</h3>
								<p>Our fully stocked pharmacy ensures access to essential medications and expert advice for your prescriptions, all under one roof at Healstro.</p>
							</div>
							<!-- End Single features -->
						</div>
						<div class="col-lg-4 col-12">
							<!-- Start Single features -->
							<div class="single-features last">
								<div class="signle-icon">
									<i class="icofont icofont-stethoscope"></i>
								</div>
								<h3>Medical Treatment</h3>
								<p>Comprehensive care from diagnosis to recovery, delivered by expert specialists across multiple disciplines, including cardiology, neurology, and more.</p>
							</div>
							<!-- End Single features -->
						</div>
					</div></section>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->


		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>In need of urgent medical attention?</h2>
							<p>Call Healstro’s 24/7 emergency hotline at 1234 56789 for immediate assistance and expert care.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
<!-- Start service -->
<section class="services section" id="centre">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Offer Various Centres of Excellence To Improve Your Health</h2>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-prescription"></i>
					<h4><a href="#">General Treatment</a></h4>
					<p>Comprehensive care in dermatology, ophthalmology, cardiology, neurology, and oncology, tailored to your health needs.</p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-user-alt-2"></i>
					<h4><a href="#">Dermatology</a></h4>
					<p>Expert care for skin conditions, offering treatments for acne, eczema, psoriasis, and skin cancer.</p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-eye-alt"></i>
					<h4><a href="#">Ophthalmology</a></h4>
					<p>Comprehensive eye care, including vision correction, cataract surgery, and treatment for retinal and corneal diseases.</p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-heart-alt"></i>
					<h4><a href="#">Cardiology</a></h4>
					<p>Specialized heart care, from routine check-ups to advanced treatments for heart disease and hypertension management.</p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-brain"></i>
					<h4><a href="#">Neurology</a></h4>
					<p>Diagnosis and treatment of neurological disorders, including migraines, epilepsy, stroke, and Parkinson’s disease management.</p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-blood"></i>
					<h4><a href="#">Oncology</a></h4>
					<p>Expert cancer care, providing personalized treatment plans, from diagnosis through chemotherapy, radiation, and recovery.</p>	
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!--/ End service -->



		<!-- Start portfolio -->
		<section class="portfolio " id="doctors">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Expert Doctors at Healstro</h2>
							<img src="img/section-img.png" alt="#">
							<p>We are proud to have a team of dedicated specialists delivering exceptional care across various fields.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="img/pf1.jpg" alt="#">
								<a href="#" class="btn view-details" style="text-align: center;" data-description="Dr. Arun Kumar brings over 15 years of experience in general medicine, focusing on preventive care and chronic disease management. His patient-centric approach ensures personalized treatment plans that address both immediate health concerns and long-term wellness. Dr. Kumar is known for his compassionate care and expertise in managing lifestyle-related conditions like diabetes, hypertension, and respiratory issues.

								">Dr. Arun Kumar <br><span style="color: white; position: relative;left:-30px;">(General Medicine Specialist)<span></a>
							</div>
							<div class="single-pf">
								<img src="img/pf2.jpg" alt="#">
								<a href="#" class="btn view-details" data-description="Dr. Meera Rajan is a leading expert in dermatology with extensive experience in treating complex skin conditions. She specializes in advanced acne management, eczema treatment, and cosmetic dermatology procedures, including chemical peels and laser therapies. Her approach combines medical precision with aesthetic expertise, ensuring healthy and glowing skin for her patients.

								">Dr. Meera Rajan <br><span style="color: white;">(Dermatologist)</span></a>
							</div>
							<div class="single-pf">
								<img src="img/pf3.jpg" alt="#">
								<a href="#" class="btn view-details" data-description="With a keen focus on advanced eye care, Dr. Priya Sharma excels in vision correction and cataract surgeries. She is highly skilled in treating retinal disorders and performing complex procedures like LASIK and corneal transplants. Dr. Sharma’s dedication to restoring and preserving vision has earned her a reputation for excellence in ophthalmology.">Dr. Priya Sharma<br><span style="color: white;">(Ophthalmologist)</span></a>
							</div>
							<div class="single-pf">
								<img src="img/pf4.jpg" alt="#">
								<a href="#" class="btn view-details" data-description="Dr. Ramesh Patel is a renowned cardiologist known for his expertise in diagnosing and treating heart conditions. He specializes in advanced cardiac interventions, including angioplasty and pacemaker implantation. His proactive approach to heart health, combined with cutting-edge treatments, ensures the best outcomes for patients with heart diseases and hypertension.

								">Dr. Ramesh Patel<br><span style="color: white;">(Cardiologist)</span> </a>
							</div>
							<div class="single-pf">
								<img src="img/pf1.jpg" alt="#">
								<a href="#" class="btn view-details" data-description="Dr. Anitha Nair is a leading neurologist with a passion for helping patients manage complex neurological disorders. She is an expert in treating migraines, epilepsy, and stroke rehabilitation. Dr. Nair also focuses on neurodegenerative diseases such as Parkinson’s and Alzheimer’s, providing holistic care that improves both quality of life and functional outcomes.

								">Dr. Anitha Nair <br><span style="color: white;">(Neurologist)</span></a></div>
							<div class="single-pf">
								<img src="img/pf2.jpg" alt="#">
								<a href="#" class="btn view-details" data-description="Dr. Sanjay Menon is a highly respected oncologist dedicated to personalized cancer care. He specializes in chemotherapy, radiation therapy, and targeted cancer treatments. Dr. Menon emphasizes a multidisciplinary approach, collaborating with specialists to provide comprehensive support from diagnosis to recovery. His empathetic care and commitment to innovation make him a trusted figure in oncology.
								">Dr. Sanjay Menon<br><span style="color: white;">(Oncologist)</span></a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal Popup -->
<div id="doctorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="doctorDescription">Doctor details will appear here.</p>
    </div>
</div>
		</section>
		<!--/ End portfolio -->
		
		
		
<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-home"></i>
					<div class="content">
						<span class="counter">1892</span>
						<p>Hospital Rooms</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-user-alt-3"></i>
					<div class="content">
						<span class="counter">341</span>
						<p>Specialist Doctors</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont-simple-smile"></i>
					<div class="content">
						<span class="counter">3452</span>
						<p>Happy Patients</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-table"></i>
					<div class="content">
						<span class="counter">25</span>
						<p>Years of Experience</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
		</div>
	</div>
</div>
<!--/ End Fun-facts -->

		
		
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blogs">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Stay Informed with the Latest Health Updates</h2>
							<img src="img/section-img.png" alt="#">
							<p>Explore expert insights, wellness tips, and medical advancements curated by Healstro to support your health journey.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog1.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">20 November, 2024</div>
									<h2><a href="blogs/cancer_blog.html">The Most Dangerous Cancer in the World</a></h2>
									<p class="text">Cancer is one of the leading causes of death worldwide, but not all cancers pose the same level of threat. Among the various types, pancreatic cancer stands out as one of the deadliest.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog2.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">22 November, 2024</div>
									<h2><a href="blogs/diabeties_blog.html">Understanding Diabetes: Types, Causes, Symptoms, and Management
									</a></h2>
									<p class="text">Diabetes is a chronic condition where the body struggles to regulate blood sugar, impacting energy levels and requiring management to prevent complications.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog3.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">24 November, 2024</div>
									<h2><a href="blogs/autism_blog.html">Understanding Autism: A Journey Through Neurodiversity</a></h2>
									<p class="text">Autism, or Autism Spectrum Disorder (ASD), is a developmental condition affecting communication, social interaction, and behavior, leading to unique ways of perceiving and engaging with the world.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients 
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<!-- Start Appointment -->
        <section class="appointment" id="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Ready to Support Your Health. Book Appointment Now!</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Experience personalized care from expert specialists at Healstro. Book an appointment easily and take the first step towards better health.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="appointment.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <select name="department" class="form-control" required>
                                    <option value="">Select Department</option>
                                    <option value="Dr. Arun Kumar (General)">Dr. Arun Kumar (General)</option>
                                    <option value="Dr. Meera Rajan (Dermatology)">Dr. Meera Rajan (Dermatology)</option>
                                    <option value="Dr. Priya Sharma (Ophthalmology)">Dr. Priya Sharma (Ophthalmology)</option>
                                    <option value="Dr. Ramesh Patel (Cardiology)">Dr. Ramesh Patel (Cardiology)</option>
                                    <option value="Dr. Anitha Nair (Neurology)">Dr. Anitha Nair (Neurology)</option>
                                    <option value="Dr. Sanjay Menon (Oncology)">Dr. Sanjay Menon (Oncology)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="date" name="date" placeholder="Date" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <select name="timing" class="form-control" required>
                                    <option value="">Select Timing</option>
                                    <option value="9:00am-9:30am">9:00 am - 9:30 am</option>
                                    <option value="9:30am-10:00am">9:30 am - 10:00 am</option>
                                    <option value="10:00am-10:30am">10:00 am - 10:30 am</option>
                                    <option value="10:30am-11:00am">10:30 am - 11:00 am</option>
                                    <option value="11:00am-11:30am">11:00 am - 11:30 am</option>
                                    <option value="11:30am-12:00pm">11:30 am - 12:00 pm</option>
                                    <option value="12:00pm-12:30pm">12:00 pm - 12:30 pm</option>
                                    <option value="12:30pm-1:00pm">12:30 pm - 1:00 pm</option>
                                    <option value="1:00pm-1:30pm">1:00 pm - 1:30 pm</option>
                                    <option value="1:30pm-2:00pm">1:30 pm - 2:00 pm</option>
                                    <option value="2:00pm-2:30pm">2:00 pm - 2:30 pm</option>
                                    <option value="2:30pm-3:00pm">2:30 pm - 3:00 pm</option>
                                    <option value="3:00pm-3:30pm">3:00 pm - 3:30 pm</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <select name="mode" class="form-control" required>
                                    <option value="">Mode of Consulting</option>
                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="age" type="number" placeholder="Age" min="0" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <select name="blood_group" class="form-control" required>
                                    <option value="">Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group"> <div class="button">
                                    <button type="submit" class="btn">Book An Appointment</button>
                                </div>
                            </div></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="appointment-image">
                    <img src="img/contact-img.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->

		  

		
	
		
		<!-- End Appointment -->
		
	<br><br>	<br><br>	
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Healstro is a multispeciality hospital offering expert care in dermatology, cardiology, neurology, and oncology.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul class="nav menu">
											<li><a href="index.php" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#services"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#centre"><i class="fa fa-caret-right" aria-hidden="true"></i>Centre of Excellence</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul class="nav menu">
											<li><a href="#doctors"><i class="fa fa-caret-right" aria-hidden="true"></i>Doctors</a></li>
											<li><a href="#blogs"><i class="fa fa-caret-right" aria-hidden="true"></i>Blogs</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Convenient Hours to Consult for you, we all also available to support you.</p>
								<ul class="time-sidual">
									<li class="day">Weekdays <span>8:00 AM - 8:00 PM</span></li>
											<li class="day">Saturday <span>9:00 AM - 6:30 PM</span></li>
											<li class="day">Sunday <span>9:00 AM - 3:00 PM</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>Subscribe to our newsletter to get allour news in your mailbox.</p>
								<form action="#" method="get"  class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>&copy; Developed by <b>Angu jayalakshmi R</b> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		<script>
			function makeCall(number) {
				window.location.href = 'tel:' + number;
			}
			</script>
<script>
    // Smooth scrolling and active class handling for internal links only
    document.querySelectorAll('.nav.menu a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Check if the link is internal (starts with #)
            if (href.startsWith("#")) {
                e.preventDefault();

                // Scroll to the section smoothly
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth'
                });

                // Remove active class from all links
                document.querySelectorAll('.nav.menu li').forEach(item => {
                    item.classList.remove('active');
                });

                // Add active class to the parent <li> of the clicked link
                this.parentElement.classList.add('active');
            }
        });
    });
</script>
<script>
    // Get modal and elements
    const modal = document.getElementById('doctorModal');
    const modalContent = document.getElementById('doctorDescription');
    const closeBtn = document.querySelector('.close');

    // Open modal on clicking 'View Details'
    document.querySelectorAll('.view-details').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior
            const description = this.getAttribute('data-description'); // Get doctor description
            modalContent.textContent = description; // Set modal content
            modal.style.display = 'block'; // Show modal
        });
    });

    // Close modal on clicking 'X'
    closeBtn.onclick = function () {
        modal.style.display = 'none';
    };

    // Close modal if clicking outside the modal content
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
</script>


		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS
        <script src="js/jquery.scrollUp.min.js"></script> -->
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>
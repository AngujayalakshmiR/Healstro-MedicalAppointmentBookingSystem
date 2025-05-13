
<?php
session_start(); // Start the session to access success or error message
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_appointments"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM appointments"; // Replace 'appointments' with your table name
$result = $conn->query($sql);
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
 /* Table styling */
            table {
                width: 100%;
                border-collapse: collapse;
                border-radius: 25px;
                overflow: hidden;
                margin-top: 20px;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            }
            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #2C2D3F;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #ddd;
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
											<li  ><a href="index.php" style="color:#2C2D3F;font-size:12px;">Home</a>
											</li>
											<li><a href="index.php" style="color:#2C2D3F;font-size:12px;">Services </a></li>
											<li><a href="index.php" style="color:#2C2D3F;font-size:12px;">Centre of Excellence </a></li>
											<li><a href="index.php" style="color:#2C2D3F;font-size:12px;">Doctors </a></li>
											<li><a href="index.php" style="color:#2C2D3F;font-size:12px;">Blogs </a></li>
											<li><a href="#blogs" class="active" style="color:#2C2D3F;font-size:12px;">View Appointment</a></li>
											<!--<li><a href="contact.html" class="active">Contact Us</a></li>-->
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="index.php" class="btn" style="font-size:12px;">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
	
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blogs">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Appointment Slots Booked</h2>
							<img src="img/section-img.png" alt="#">
							<p>Booked Appointment Slots appear here for the reference of Healstro Centre.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Table to display data -->
                    <div class="col-lg-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>Timing</th>
                                    <th>Mode</th>
                                    <th>Age</th>
                                    <th>Blood Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>"; // Replace with your column names
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['department'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['timing'] . "</td>";
                                        echo "<td>" . $row['mode'] . "</td>";
                                        echo "<td>" . $row['age'] . "</td>";
                                        echo "<td>" . $row['blood_group'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No appointments found.</td></tr>";
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</section>

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
											<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Centre of Excellence</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul class="nav menu">
											<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Doctors</a></li>
											<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Blogs</a></li>	
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
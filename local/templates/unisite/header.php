<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?$APPLICATION->ShowTitle();?></title>

		<!-- :: Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">

		<!-- :: Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		

        <!-- :: Bootstrap CSS -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/bootstrap.min.css');?>
        
        <!-- :: FontAwesome -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/fonts/fontawesome/css/all.min.css');?>
        
        <!-- :: FlatIcon -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/flaticon.css');?>
        
        <!-- :: OWL Carousel -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/owl.carousel.min.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/owl.theme.default.min.css');?>
        
        <!-- :: Lity -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/lity.min.css');?>

        <!-- :: Style CSS -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/style.css');?>

        <!-- :: Style Responsive CSS -->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/responsive.css');?>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

		<?$APPLICATION->ShowHead();?>
    </head>
    <body>
		<?$APPLICATION->ShowPanel();?>
		<div class="page-wrapper">
			<!-- :: Loading -->
			<div class="loading">
				<div class="loading-box">
					<div class="lds-ring">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
			
			<!-- :: Top Navbar -->
			<div class="top-nav-bar">
				<div class="container">
					<div class="top-nav-bar-box d-flex align-items-center justify-content-between">
						<ul class="info">
							<li><span>Email:</span> AR-Coder@arcoder.com</li>
							<li><span>Phone:</span> +(002) 0121-2843-661</li>
							<li><span>Email:</span> Shibin El-Kom , El-Menoufia, Egypt</li>
						</ul>
						<ul class="icon-follow">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fas fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- :: Navbar -->
			<nav class="nav-bar">
				<div class="container">
					<div class="box-content d-flex align-items-center justify-content-between">
						<div class="logo">
							<a href="index.html" class="logo-nav">
								<img class="img-fluid" src="assets/images/logo/01_logo.png" alt="01 Logo">
								<img class="img-fluid dark-mode-logo" src="assets/images/logo/03_logo.png" alt="03 Logo">
							</a>
							<a href="#open-nav-bar-menu" class="open-nav-bar">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
						<div class="nav-bar-link" id="open-nav-bar-menu">
							<ul class="level-1">
								<li class="has-menu">
									<a href="#" class="color-active">Home</a>
									<ul class="level-2">
										<li><a href="index.html">Home Main</a></li>
										<li><a href="02_home.html">Home Modern</a></li>
									</ul>
								</li>
								<li class="has-menu">
									<a href="#">About</a>
									<ul class="level-2">
										<li><a href="01_about.html">About Us 1</a></li>
										<li><a href="02_about.html">About Us 2</a></li>
									</ul>
								</li>
								<li class="has-menu">
									<a href="#">Services</a>
									<ul class="level-2">
										<li><a href="01_services.html">Services 1</a></li>
										<li><a href="02_services.html">Services 2</a></li>
										<li><a href="analytics-solutions.html">Analytics Solutions</a></li>
										<li><a href="business-growth.html">Business Growth</a></li>
										<li><a href="corporate-finanace.html">Corporate Finanace</a></li>
										<li><a href="advance-reports.html">Advance Reports</a></li>
										<li><a href="chain-management.html">Chain Management</a></li>
										<li><a href="advanced-analytics.html">Advanced Analytics</a></li>
									</ul>
								</li>
								<li class="has-menu">
									<a href="#">Pages</a>
									<ul class="level-2">
										<li><a href="01_careers.html">Careers</a></li>
										<li><a href="01_team.html">Our Team</a></li>
										<li><a href="01_faq.html">FAQs</a></li>
										<li><a href="01_pricing.html">Our Pricing</a></li>
										<li><a href="01_testimonial.html">Testimonial</a></li>
										<li><a href="01_shop.html">Shop</a></li>
										<li><a href="01_single-product.html">Product Details</a></li>
										<li><a href="404_error.html">Error Page</a></li>
									</ul>
								</li>
								<li class="has-menu">
									<a href="#">Case Studies</a>
									<ul class="level-2">
										<li><a href="01_case-studies.html">Case Studies 1</a></li>
										<li><a href="02_case-studies.html">Case Studies 2</a></li>
										<li><a href="01_single-case-studies.html">Single Case Studies</a></li>
									</ul>
								</li>
								<li class="has-menu">
									<a href="#">Blog</a>
									<ul class="level-2">
										<li><a href="01_blog.html">Blog Grid</a></li>
										<li><a href="02_blog.html">Blog Grid Sidebar</a></li>
										<li><a href="03_blog.html">Blog Standard</a></li>
										<li><a href="01_single-blog.html">Single Blog</a></li>
									</ul>
								</li>
								<li><a href="01_contact.html">Contact</a></li>
							</ul>
						</div>
						<ul class="icon">
							<li class="cart">
								<a href="#" class="icon-item"><i class="fas fa-shopping-cart"></i></a>
								<div class="cart-popup">
									<div class="item">
										<img class="img-fluid" src="assets/images/shop/01_shop.jpg" alt="01 Shop">
										<div class="item-content">
											<div>Personal Branding</div>
											<span>2 x $ 38.00</span>
										</div>
										<span class="delete-item">x</span>
									</div>
									<div class="item">
										<img class="img-fluid" src="assets/images/shop/02_shop.jpg" alt="02 Shop">
										<div class="item-content">
											<div>Marketing Theory</div>
											<span>1 x $ 28.00</span>
										</div>
										<span class="delete-item">x</span>
									</div>
									<div class="subtotal">
										<span>Subtotal:</span>
										<span>$ 88.00</span>
									</div>
									<div class="button-cart">
										<a href="01_shop.html" class="btn-1">View Cart</a>
										<a href="01_shop.html" class="btn-1 btn-3">Checkout</a>
									</div>
								</div>
							</li>
							<li><a href="#" class="icon-item open-search-box"><i class="fas fa-search"></i></a></li>
							<li><a href="#" class="icon-item open-menu"><i class="fas fa-th"></i></a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<!-- :: Search Box -->
			<div class="search-box">
				<form>
					<input type="search" placeholder="Search Here..">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
				<i class="fas fa-times close-search"></i>
			</div>
			
			<!-- :: Menu Box -->
			<div class="menu-box">
				<div class="inner-menu">
					<div class="website-info">
						<a href="#" class="logo">
							<img class="img-fluid" src="assets/images/logo/01_logo.png" alt="01 Logo">
							<img class="img-fluid dark-mode-logo" src="assets/images/logo/03_logo.png" alt="03 Logo">
						</a>
						<p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
					</div>
					<div class="contact-info">
						<h4>Contact Info</h4>
						<div class="contact-box">
							<i class="flaticon-call"></i>
							<div class="box">
								<p>+(002) 0121-2843-661</p>
								<p>+(002) 0106-8710-594</p>
							</div>
						</div>
						<div class="contact-box">
							<i class="flaticon-email"></i>
							<div class="box">
								<p>AR-Coder@arcoder.com</p>
								<p>Support@arcoder.com</p>
							</div>
						</div>
						<div class="contact-box">
							<i class="flaticon-location"></i>
							<div class="box">
								<p>Menouf City , El-Menoufia, Egypt.</p>
								<p>Shibin El-Kom , El-Menoufia, Egypt.</p>
							</div>
						</div>
					</div>
					<div class="follow-us">
						<h4>Follow Us</h4>
						<ul class="icon-follow">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<div class="exit-menu-box">
						<i class="fas fa-times"></i>
					</div>
				</div>
			</div>
			
			<!-- :: Header -->
			<header class="header" id="page">
				<div class="header-owl owl-carousel owl-theme">
					<div class="sec-hero display-table" style="background-image: url(assets/images/header/01_header.jpg)">
						<div class="table-cell">
							<div class="overlay"></div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8">
										<div class="banner">
											<h1 class="handline">Qulity is the best business plan</h1>
											<p class="about-site">Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
											<div class="buttons">
												<a href="#start" class="btn-1 move-section">Get Started</a>
												<a href="01_services.html" class="btn-1 btn-2">Our Services</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sec-hero display-table" style="background-image: url(assets/images/header/02_header.jpg)">
						<div class="table-cell">
							<div class="overlay"></div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8">
										<div class="banner">
											<h1 class="handline">Consulto Helps You To Save Your Money</h1>
											<p class="about-site">Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
											<div class="buttons">
												<a href="#" class="btn-1 btn-3">See More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sec-hero display-table" style="background-image: url(assets/images/header/03_header.jpg)">
						<div class="table-cell">
							<div class="overlay"></div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8">
										<div class="banner">
											<h1 class="handline">Best Creative Team With Smart Ideas</h1>
											<p class="about-site">Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
											<div class="buttons">
												<a href="01_services.html" class="btn-1 btn-2">Our Services</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

	
						
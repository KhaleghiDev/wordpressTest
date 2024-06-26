
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>ابوالفضل خالقی حصاری - وب سایت شخصی / زرومه / نمونه کار</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="vCard & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="beshleyua" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	
	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/basic.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/layout.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/blogs.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/line-awesome.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/simplebar.css" />

	<!-- rtl -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/rtl.css" />
	
	<!-- theme colors -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/theme-colors/green.css" />
	<!--<link rel="stylesheet" href="css/theme-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/theme-colors/red.css" />-->
	<!--<link rel="stylesheet" href="css/theme-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/theme-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/theme-colors/purple.css" />-->
	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon.ico">
	
</head>

<body>
	<div class="page">

		<div class="theme_panel left">
			<div class="toggle_bts">
				<a class="toggle-theme-panel" href="#">
					<i class="icon la la-gear"></i>
				</a>
			</div>
			<div class="theme_menu">
				<h4>تعویض رنگ</h4>
				<div class="segment">
					<ul class="theme layout_style">
						<li>
                            <a title="پوسته سبز" href="#" data-color="green" style="background-color: #5ac24e;"></a>
                        </li>
						<li>
                            <a title="پوسته آبی" href="#" data-color="blue" style="background-color: #65b4f3;"></a>
                        </li>
						<li>
                            <a title="پوسته نارنجی" href="#" data-color="orange" style="background-color: #f5a640;"></a>
                        </li>
						<li>
                            <a title="پوسته صورتی" href="#" data-color="pink" style="background-color: #ee6192;"></a>
                        </li>
						<li>
                            <a title="پوسته بنفش" href="#" data-color="purple" style="background-color: #bb68c8;"></a>
                        </li>
						<li>
                            <a title="پوسته قرمز" href="#" data-color="red" style="background-color: #ee534f;"></a>
                        </li>
					</ul>
				</div>
                <div class="clear"></div>
				<h4>زبان های پوسته</h4>
				<ul class="theme demo_list">
                    <li style="width: 50%;"><a href="index-en.html"><strong>انگلیسی</strong></a></li>
                    <li style="width: 50%;"><a href="index.html"><strong>فارسی</strong></a></li>
				</ul>
				<div class="clear"></div>
				<h4>بک گراند ها</h4>
				<ul class="theme demo_list">
                    <li style="width: 50%;"><a href="index.html"><strong>پس زمینه عکس</strong></a></li>
                    <li style="width: 50%;"><a href="index-video.html"><strong>پس زمینه ویدیو</strong></a></li>
                    <li style="width: 50%;"><a href="index-particles.html"><strong>پس زمینه شبکه</strong></a></li>
                    <li style="width: 50%;"><a href="index-bgcolor.html"><strong>پس زمینه رنگی</strong></a></li>
				</ul>
				<div class="clear"></div>
				<a href="https://www.rtl-theme.com/author/daniel_aria/" class="buy-btn"><i class="ion ion-android-cart"></i>خرید قالب</a>
			</div>
		</div>
		
		<!--
			Preloader
		-->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>
		
		<!--
			Header
		-->
		<header class="header">

			<!-- logo -->
			<div class="logo">
				<a href="#"><span><i class="la la-slack"></i></span></a>
			</div>

			<!-- menu -->
			<div class="top-menu">
				<ul>
					<li class="active">
						<a href="#home-card">
							<span class="icon la la-home"></span>
							<span class="link">خانه</span>
						</a>
					</li>
					<li>
						<a href="#about-card">
							<span class="icon la la-user"></span>
							<span class="link">درباره</span>
						</a>
					</li>
					<li>
						<a href="#resume-card">
							<span class="icon la la-gear"></span>
							<span class="link">مهارت</span>
						</a>
					</li>
					<li>
						<a href="#works-card">
							<span class="icon la la-eye"></span>
							<span class="link">کارها</span>
						</a>
					</li>
					<li>
						<a href="#blog-card">
							<span class="icon la la-newspaper-o"></span>
							<span class="link">وبلاگ</span>
						</a>
					</li>
					<li>
						<a href="#contacts-card">
							<span class="icon la la-envelope"></span>
							<span class="link">تماس</span>
						</a>
					</li>
				</ul>
			</div>

			<!-- Started socials -->
			<div class="social">
				<a target="_blank" href="https://www.rtl-theme.com/"><img src="<?php echo get_template_directory_uri();?>/images/icon/rtl.png" width="18" height="18" alt="Rtl Theme"></a>
			</div>

			<!-- Mobile Menu -->
			<span class="menu-btn">
				<span class="m-line"></span>
			</span>

		</header>

		<!--
			Container
		-->
		<div class="container">

			<!--
				Card - Started
			-->
			<div class="card-inner card-started active" id="home-card">

				<!-- Started Background -->
				<div class="slide" style="background-image: url(<?php echo get_template_directory_uri();?>/images/bg.jpg);"></div>
				
				<div class="centrize full-width">
					<div class="vertical-center">

						<!-- Started titles -->
						<div class="title"><span>ابوالفضل </span>  خالقی حصاری</div>
						<div class="subtitle">
							من 
							<div class="typing-title">
								<p>یک <strong>طراح وب سایت هستم.</strong></p>
								<p>یک <strong>اسکریپتر هستم.</strong></p>
								<p>یک <strong>برنامه نویس هستم.</strong></p>
								<p>یک <strong>مدیر تبلیغات هستم.</strong></p>
							</div>
							<span class="typed-title"></span>
						</div>
						
					</div>
				</div>

			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner" id="about-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
						
						<!-- About Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(<?php echo get_template_directory_uri();?>/images/profile.jpg);"></div>
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">من</div>
									<div class="text">
										<p>
											<strong>وب سایت شخصی </strong> ابوالفضل خالقی حصاری<br />
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم <br />
											از صنعت چاپ و با استفاده از طراحان گرافیک است <strong>html css <br />
											wordpress php jquery bootstrap</strong>
										</p>
									</div>
									<div class="circle-bts">
										<a href="#"><span><i class="icon la la-download"></i>دانلود رزومه من</span></a>
										<a href="#"><i class="icon la la-github"></i></a>
										<a href="#"><i class="icon la la-stack-overflow"></i></a>
										<a href="#"><i class="icon la la-skype"></i></a>
									</div>
								</div>
							</div>
						</div>

						<!--
							Services
						-->
						<div class="content services">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>خدمات</span> من</div>

								</div>
							</div>

							<!-- service items -->
							<div class="row service-items">

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-html5"></i></div>
										<div class="name">طراحی وب سایت</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-music"></i></div>
										<div class="name">آهنگ سازی</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-bullhorn"></i></div>
										<div class="name">اخبار و اعلان</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-gamepad"></i></div>
										<div class="name">گیم پد</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-area-chart"></i></div>
										<div class="name">آنالیزر</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-camera-retro"></i></div>
										<div class="name">عکاسی</div>
										<p>
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
										</p>
									</div>
								</div>

							</div>

						</div>

						<!--
							Price Tables
						-->
						<div class="content pricing">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>پلن های</span> طراحی وبسایت</div>

								</div>
							</div>

							<!-- pricing items -->
							<div class="row pricing-items">

								<!-- pricing item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="pricing-item card-box">
										<div class="icon"><i class="la la-tachometer"></i></div>
										<div class="name">آماده</div>
										<div class="amount"><span class="dollar">هزار</span> <span class="number">70</span> <span class="period">تومان</span></div>
										<div class="feature-list">
											<ul>
												<li>معرفی برنامه نویس</li>
												<li>تولید فروشگاه یا پرتال اختصاصی</li>
												<li>ارتباط با سامانه ایمیلی و بانک اطلاعاتی</li>
												<li class="disable">قابلیت پرداخت آنلاین</li>
												<li class="disable">آموزش حضوری <strong>جدید</strong></li>
											</ul>
										</div>
										<div class="lnks"><a href="#" class="lnk">خرید <span>پلن آماده</span></a></div>
									</div>
								</div>

								<!-- pricing item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="pricing-item card-box">
										<div class="icon"><i class="la la-rocket"></i></div>
										<div class="name"> اختصاصی</div>
										<div class="amount"><span class="dollar">هزار</span> <span class="number">100</span> <span class="period">تومان</span></div>
										<div class="feature-list">
											<ul>
											  <li>کلیه موارد اعلامی در np2 </li>
											  <li>معرفی برنامه نویس</li>
											  <li>معرفی تیم اجرائی و مدیر پروژه</li>
											  <li>تولید فروشگاه یا پرتال اختصاصی</li>
											  <li>پشتیبانی سالانه کلی پروژه</li>
											  <li>قابلیت پرداخت آنلاین</li>
												<li>آموزش حضوری <strong>الجديد</strong></li>
											</ul>
										</div>
										<div class="lnks"><a href="#" class="lnk">خرید <span>پلن اختصاصی</span></a></div>
									</div>
								</div>

							</div>

						</div>

						<!--
							Fun Fact
						-->
						<div class="content fuct">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>مهارت</span> پروژه</div>

								</div>
							</div>

							<!-- fuct items -->
							<div class="row fuct-items">

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-headphones"></i></div>
										<div class="name">موزیک پلیر</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-trophy"></i></div>
										<div class="name">جوایز ویژه</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-lightbulb-o"></i></div>
										<div class="name">طراحی ایده ها</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-flag-o"></i></div>
										<div class="name">اجرای برنامه ها</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-book"></i></div>
										<div class="name">آموزشگاه اختصاصی</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-code"></i></div>
										<div class="name">برنامه نویسی حرفه ای</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-smile-o"></i></div>
										<div class="name">گرافیک اختصاصی</div>
									</div>
								</div>

								<!-- fuct item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="fuct-item card-box">
										<div class="icon"><i class="la la-bicycle"></i></div>
										<div class="name">تحویل فوری </div>
									</div>
								</div>

							</div>

						</div>

						<!--
							Clients
						-->
						<div class="content clients">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title">مشتریان من</div>

								</div>
							</div>

							<!-- client items -->
							<div class="row client-items">

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_1.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_3.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_4.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_1.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_3.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_4.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_1.png" alt="" />
											</a>
										</div>
									</div>
								</div>

								<!-- client item -->
								<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
									<div class="client-item card-box">
										<div class="image">
											<a target="_blank" href="https://www.google.com">
												<img src="<?php echo get_template_directory_uri();?>/images/clients/client_3.png" alt="" />
											</a>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
					
				</div>
			</div>
			
			<!-- 
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="row card-container">
						
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Resume Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(<?php echo get_template_directory_uri();?>/images/profile2.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">تجربیات</div>
								</div>
							</div>
						</div>

						<!--
							Resume
						-->
						<div class="content resume">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>تجربیات</span> علمی</div>

									<!-- resume items -->
									<div class="resume-items card-box">

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">مهندسی شبکه</div>
											<div class="date">سال 1397در کمپانی فیس بوک<span>|</span> Facebook Inc.</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">طراحی وب سایت</div>
											<div class="date">سال 1397در کمپانی گوگل<span>|</span> Google Inc.</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">طراحی اپیکیشن</div>
											<div class="date">سال 1397در کمپانی اپل<span>|</span> Apple Inc.</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
										</div>

									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>تجربیات</span> تعلیمی</div>

									<!-- resume items -->
									<div class="resume-items card-box">

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">دانشگاه استونی</div>
											<div class="date">2006-2008 <span>|</span> New York</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">دانشگاه هاولس</div>
											<div class="date">2005-2006 <span>|</span> Paris</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">دانشگاه تهران</div>
											<div class="date">2004-2005 <span>|</span> Iran</div>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
										</div>

									</div>
								</div>
							</div>
						</div>

						<!--
							Skills
						-->
						<div class="content skills">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>مهارت های</span> شخصی</div>

									<!-- skills -->
									<div class="skills-list card-box">
										<ul>
											<li> 
												<div class="name">شبکه و نتورک</div>
												<div class="progress">
													<div class="percentage" style="width:90%;"></div>
												</div>
											</li>
											<li> 
												<div class="name">وب سرورها</div>
												<div class="progress">
													<div class="percentage" style="width:65%;"></div>
												</div>
											</li>
											<li> 
												<div class="name">زبان انگلیسی</div>
												<div class="progress">
													<div class="percentage" style="width:75%;"></div>
												</div>
											</li>
											<li>
												<div class="name">زبان فرانسوی</div>
												<div class="progress">
													<div class="percentage" style="width:85%;"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>مهارت های</span> طراحی</div>

									<!-- skills -->
									<div class="skills-list card-box">
										<ul>
											<li> 
												<div class="name">WordPress</div>
												<div class="progress">
													<div class="percentage" style="width:90%;"></div>
												</div>
											</li>
											<li> 
												<div class="name">PHP / MYSQL</div>
												<div class="progress">
													<div class="percentage" style="width:65%;"></div>
												</div>
											</li>
											<li> 
												<div class="name">HTML / CSS / JS</div>
												<div class="progress">
													<div class="percentage" style="width:95%;"></div>
												</div>
											</li>
											<li>
												<div class="name">Photoshop</div>
												<div class="progress">
													<div class="percentage" style="width:85%;"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
			
			<!-- 
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="row card-container">
					
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Work Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(<?php echo get_template_directory_uri();?>/images/profile3.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">نمونه کار</div>
								</div>
							</div>
						</div>

						<!--
							Works
						-->
						<div class="content works">
							<div class="row">
								<div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

									<!-- title -->
									<div class="title"><span>نمونه </span>کارهای من</div>

								</div>
								<div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

									<!-- filters -->
									<div class="filter-menu filter-button-group">
										<div class="f_btn active">
											<label><input type="radio" name="fl_radio" value="grid-item" />
										    همه</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="photo" />
										    طراحی وب سایت</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="video" />
										    برنامه نویسی</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="music" />
										    مدیریت پروژه</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="design" />
										    پشتیبانی</label>
										</div>
									</div>

								</div>
							</div>

							<!-- work items -->
							<div class="row grid-items">

								<!-- work item photo -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
									<div class="box-item card-box">
										<div class="image">
											<a href="<?php echo get_template_directory_uri();?>/images/works/work1.jpg" class="has-popup-image">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work1.jpg" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="<?php echo get_template_directory_uri();?>/images/works/work1.jpg" class="name has-popup-image">وب سایت آمازون</a>
											<div class="category">طراحی وب سایت</div>
										</div>
									</div>
								</div>

								<!-- work item video -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
									<div class="box-item card-box">
										<div class="image">
											<a href="#" class="has-popup-video">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work2.jpg" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="https://vimeo.com/97102654" class="name has-popup-video">شرکت اپل </a>
											<div class="category">برنامه نویسی</div>
										</div>
									</div>
								</div>

								<!-- work item music -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work3.jpg" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
										</div>
										<div class="desc"><a href="#" class="name has-popup">موزیک پلیر</a>
										  <div class="category">مدیریت پروژه</div>
									  </div>
									</div>
								</div>

								<!-- work item design -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-1" class="has-popup-media">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work4.jpg" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-1" class="name has-popup-media">شرکت اپل</a>
											<div class="category">پشتیبانی</div>
										</div>
										<div id="popup-1" class="popup-box mfp-fade mfp-hide">
											<div class="content">
												<div class="image">
													<img src="<?php echo get_template_directory_uri();?>/images/works/work4.jpg" alt="">
												</div>
												<div class="desc">
													<div class="post-box">
													  <h1>شرکت اپل</h1>
													  <div class="blog-detail">پشتیبانی</div>
														<div class="blog-content">
															<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <blockquote> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </blockquote>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <ul class="list-style">
														    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم . </li>
														    <li>از صنعت چاپ و با استفاده از طراحان گرافیک است.</li>
														    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</li>
														  </ul>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														</div>
														<a href="#" class="button">
															<span class="text">ابوالفضل خالقی حصاری</span>
															<span class="arrow"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- work item photo -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
									<div class="box-item card-box">
										<div class="image">
											<a href="<?php echo get_template_directory_uri();?>/images/works/work5.jpg" class="has-popup-image">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work5.jpg" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="<?php echo get_template_directory_uri();?>/images/works/work5.jpg" class="name has-popup-image">وب سایت وی کی پدیا</a>
											<div class="category">طراحی وب سایت</div>
										</div>
									</div>
								</div>

								<!-- work item music -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work8.jpg" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
										</div>
										<div class="desc"><a href="#" class="name has-popup">گوگل پلی</a>
										  <div class="category">مدیریت پروژه</div>
									  </div>
									</div>
								</div>

								<!-- work item video -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
									<div class="box-item card-box">
										<div class="image">
											<a href="#" class="has-popup-video">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work6.jpg" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="https://vimeo.com/97102654" class="name has-popup-video">شرکت فورد آمریکا</a>
											<div class="category">برنامه نویسی</div>
										</div>
									</div>
								</div>

								<!-- work item design -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-2" class="has-popup-media">
												<img src="<?php echo get_template_directory_uri();?>/images/works/work7.jpg" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-2" class="name has-popup-media">فیس بوک</a>
											<div class="category">پشتیبانی</div>
										</div>
										<div id="popup-2" class="popup-box mfp-fade mfp-hide">
											<div class="content">
												<div class="image">
													<img src="<?php echo get_template_directory_uri();?>/images/works/work7.jpg" alt="">
												</div>
												<div class="desc">
													<div class="post-box">
													  <h1> فیس بوک</h1>
													  <div class="blog-detail">پشتیبانی</div>
														<div class="blog-content">
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <blockquote> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </blockquote>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														  <ul class="list-style">
														    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم . </li>
														    <li>از صنعت چاپ و با استفاده از طراحان گرافیک است.</li>
														    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</li>
														  </ul>
														  <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
														</div>
														<a href="#" class="button">
															<span class="text">ابوالفضل خالقی حصاری</span>
															<span class="arrow"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- 
				Card - Blog
			-->
			<div class="card-inner" id="blog-card">
				<div class="row card-container">
						
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
						
						<!-- Blog Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(<?php echo get_template_directory_uri();?>/images/profile4.jpg);"></div>
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">وبلاگ خبری</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>آخرین اخبار</span> وبلاگ من</div>

								</div>
							</div>

							<!-- blog items -->
							<div class="row">

								<!-- blog item -->
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="box-item card-box">
										<div class="image">
											<a href="blog-post.html">
												<img src="<?php echo get_template_directory_uri();?>/images/blog/blog1.jpg">
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>20</strong>مرداد</span>
											</a>
										</div>
										<div class="desc"><a class="name">طراحی و تولید ساختار گرافیکی اختصاصی </a>
										  <div class="category">طراحی وب سایت</div>
										</div>
									</div>
								</div>

								<!-- blog item -->
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="box-item card-box">
										<div class="image">
											<a href="blog-post.html">
												<img src="<?php echo get_template_directory_uri();?>/images/blog/blog2.jpg">
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>19</strong>مرداد</span>
											</a>
										</div>
										<div class="desc">
											<a href="blog-post.html" class="name">نصب سیستم مدیریت محتوای کامل</a>
											<div class="category">برنامه نویسی</div>
										</div>
									</div>
								</div>

								<!-- blog item -->
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="box-item card-box">
										<div class="image">
											<a href="blog-post.html">
												<img src="<?php echo get_template_directory_uri();?>/images/blog/blog3.jpg" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>20</strong>تیر</span>
											</a>
										</div>
										<div class="desc">
											<a href="blog-post.html" class="name">نصب سیستم فروشگاهی یا آگهی</a>
											<div class="category">مدیریت پروژه</div>
										</div>
									</div>
								</div>

							</div>

						</div> 

					</div>
						
				</div>
			</div>
			
			<!-- 
				Card - Contacts
			-->
			<div class="card-inner" id="contacts-card">
				<div class="row card-container">
					
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
						
						<!-- Map -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
							<div class="map" id="map"></div>
						</div>
							
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">تماس باما</div>
								</div>
							</div>
						</div>

						<!--
							Contacts Info
						-->
						<div class="content contacts-info">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>راه های</span> ارتباطی</div>

								</div>
							</div>

							<!-- contacts items -->
							<div class="row contacts-items">

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-map-marker"></i></div>
										<div class="name">آدرس</div>
										<p> تهران - تهران پارس - خیابان نور - ساختمان پارس</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-at"></i></div>
										<div class="name">پست الکترونیکی</div>
										<p> info@example.com </p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-phone"></i></div>
										<div class="name">تلفن تماس</div>
										<p> 021-36665558</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-check-square"></i></div>
										<div class="name">ساعات کاری</div>
										<p> شنبه تا پنج شنبه ساعت 8 الی 21</p>
									</div>
								</div>

							</div>

						</div>

						<!--
							Contacts Form
						-->
						<div class="content contacts-form">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>تماس</span> باما</div>

								</div>
							</div>
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- form -->
									<div class="contact_form card-box">
										<form id="cform" method="post">
											<div class="row">
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="name" placeholder="نام و نام خانوادگی" />
													</div>
												</div>
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="email" placeholder="پست الکترونیکی" />
													</div>
												</div>
												<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
													<div class="group-val">
														<textarea name="message" placeholder="متن پیام"></textarea>
													</div>
												</div>
											</div>
											<div class="align-left">
												<a href="#" class="button" onclick="$('#cform').submit(); return false;">
													<span class="text">ارسال پیام </span>
													<span class="icon"><i class="la la-arrow-right"></i></span>
												</a>
											</div>
										</form>
										<div class="alert-success">
											<p>پیام شما با موفقیت ارسال شد .</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
			
			<!-- 
				Lines Grid
			-->
			<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 10s;"></div>
						</div>
					</div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
						</div>
					</div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 0s;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<!--
		jQuery Scripts
	-->
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.validate.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/imagesloaded.pkgd.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/masonry.pkgd.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/masonry-filter.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/simplebar.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/typed.js"></script>
	
	<!--
		Google map api
	-->
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	
	<!--
		Main Scripts
	-->
	<script src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>
	
</body>
</html>
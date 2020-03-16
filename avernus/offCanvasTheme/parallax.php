<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Avernus | Off-Canvas Theme</title>
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--/end meta -->
	<!--materializa.css-->
	<link rel="stylesheet" type="text/css" href="../DemoGenerals/libs/materialize/css/materialize.min.css">
	<!--main.css-->
	<link type="text/css" rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="fStyle/parallax.css">
	<link type="text/css" rel="stylesheet" href="css/media.css">
</head>
<body id="ov-hidden"><!--id for boxlayout.js - hide scrollbar-->
	
	<!--demo content-->
	<ul id="slide-out" class="sidenav demo_sidebar">
		<div class="demo_contetn">
			<h4>Themes</h4>
			<a href="../boxTheme/index.php"><span>Box-Layout</span></a>
			<a href="../onepageTheme/index.php"><span>One-Page</span></a>
			<h4>Colors</h4>
			<form method="POST">
				<input type="text" class="custom-color" name="custom-color" placeholder="type You HEX color # :">
				<button name="change-color" class="waves-effect waves-default btn demo">Change</button>
				<button name="reset" class="waves-effect waves-default btn demo">Reset</button>
				<button id="change" type="button"><span id="hex_value">Random color</span></button>
			</form>
			<h4>portfolio</h4>
			<form method="POST">
				<div class="demo_portf">
					<label for="test2">
						<input name="radiobutton" checked type="radio" id="test2" value="2"/>
						<span>Fade</span>
					</label>
					<label for="test1">
						<input name="radiobutton" type="radio" id="test1" value="1"/>
						<span>Full Fade</span>
					</label>
					<label for="test0">
						<input name="radiobutton" type="radio" id="test0" value="0"/>
						<span>Transform</span>
					</label>
				</div>
				<button name="change-portfolio" class="waves-effect waves-default btn demo">Change</button>
				<button name="reset" class="waves-effect waves-default btn demo">Reset</button>
			</form>
			<h4>Credits</h4>
			<p>You can see all my credits is<a href="../DemoGenerals/credits/credits.html"><span>here</span></a></p>
		</div>
	</ul>

	<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large btn-floating waves-effect waves-light red pulse"><i class="material-icons">add</i></a>
	<!--/end demo content-->
	
	<!--Preloader-->
	<div id="preloader">
		<div id="loader"></div>
	</div>
	<!--/end Preloader-->

	<!--nav-->
	<div class="offMenu">
		<div class="inner_offMenu nav-wrapper">
			<span class="menu_toggle z-depth-1">
				<i class="menu_open material-icons">menu</i>
				<i class="menu_close material-icons">close</i>
			</span>

			<ul class="menu_items">
				<li><a href="#blog">Blog</a></li>
				<li><a href="#services">Service</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#about">About&Contact</a></li>
			</ul>
		</div>
	</div>
	<!--/end nav-->
	<!--page -->
	<div class="page">
		<!--content-->
		<div class="content">
			<!--home container-->
			<div class="first_container" id="home">
				<div class="intro">
					<!--baffle inomation-->
					<p>Hello, my name is Alice and</p>
					<h2 class="data color-text colour">I am a Web Developer</h2>
					<p>Creative Designer & Photographer</p>
					<!--/end baffle inomation-->
				</div>
				<div class="mouse-icon">
					<div class="wheel"></div>
				</div>
			</div>
			<!--/end home container-->

			<!--Blog container-->
			<div id="blog">
				<!--input for open panel-items -->
				<div id="bl-work-items" style="display: none;">
					<input data-panel="panel-1" id="panel-1">
					<input data-panel="panel-2" id="panel-2">
					<input data-panel="panel-3" id="panel-3">
					<input data-panel="panel-4" id="panel-4">
					<input data-panel="panel-5" id="panel-5">
					<input data-panel="panel-6" id="panel-6">
					<input data-panel="panel-7" id="panel-7">
					<input data-panel="panel-8" id="panel-8">
					<input data-panel="panel-9" id="panel-9">
				</div>
				<!--/end open panel-items-->

				<!--header-->
				<header class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="2">
					<h1 class="color-text colour">Blog</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illum commodi aperiam! In quo enim esse, tenetur. Ab voluptatem alias aliquid harum corporis quos, pariatur libero ex ipsam beatae eius.</p>
				</header>
				<!--/end header-->
				<!--wall container-->
				<div class="wall">
					<!--wall-item -->
					<div class="wall-item wow slideInLeft">
						<img src="../DemoGenerals/img/blog/01.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a temporibus totam accusantium debitis earum natus vel est, vitae assumenda quas. Hic, quam, nisi.</p>
						<label for="panel-1" class="card-link">Read </label> <!--trigger input that opens panel-item-->
					</div>
					<!--/end wall-item -->						
					<!--wall-item -->
					<div class="wall-item wow slideInUp">
						<img src="../DemoGenerals/img/blog/02.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, vero.</p>
						<label for="panel-2" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInRight">
						<img src="../DemoGenerals/img/blog/03.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quisquam, dolore optio nisi nobis eligendi quis!</p>
						<label for="panel-3" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInLeft">
						<img src="../DemoGenerals/img/blog/04.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa saepe perspiciatis alias et earum, aperiam ab non maxime repellat expedita aliquid. Officiis, voluptatum dolore ipsum unde quidem obcaecati provident, nemo deserunt animi ut placeat necessitatibus.</p>
						<label for="panel-4" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInUp">
						<img src="../DemoGenerals/img/blog/05.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta harum atque maxime architecto hic at porro quo impedit provident exercitationem.</p>
						<label for="panel-5" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInRight">
						<img src="../DemoGenerals/img/blog/06.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae enim dolorum libero quaerat quo.</p>
						<label for="panel-6" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInLeft">
						<img src="../DemoGenerals/img/blog/07.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis nesciunt, rerum, beatae quo incidunt et, provident quos fugit dolor similique quae voluptatem totam amet nulla iure praesentium doloribus! Dolor voluptates fugiat dolores deleniti velit hic aliquam at, culpa eius!</p>
						<label for="panel-7" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInUp">
						<img src="../DemoGenerals/img/blog/08.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum enim quas reprehenderit.</p>
						<label for="panel-8" class="card-link">Read </label>
					</div>
					<!--/end wall-item -->
					<!--wall-item -->
					<div class="wall-item wow slideInRight">
						<img src="../DemoGenerals/img/blog/09.jpg" alt="">
						<div class="meta_post colourBg">DEC 17, 2019</div>
						<h3 class="color-text colour">Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis molestias quibusdam veritatis commodi natus inventore ex, harum delectus! Vero necessitatibus labore beatae non cumque laborum quos numquam a voluptatem, ea libero obcaecati, fuga consequatur quisquam, dignissimos ad quae, reprehenderit hic.</p>
						<label for="panel-9" class="card-link">Read </label>
					</div>
				</div>
				<!--/end wall container -->
			</div>
			<!--/end Blog container-->
			<div class="clearfix"></div> <!--clear both: cancels the wrapping of an element at the same time from the right and left edges-->

			<!--Services container-->
			<div id="services" class="scrollspy row">
				<!--header-->
				<header class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="2">
					<h1 class="color-text colour">Services</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illum commodi aperiam! In quo enim esse, tenetur. Ab voluptatem alias aliquid harum corporis quos, pariatur libero ex ipsam beatae eius.</p>
				</header>
				<!--/end header-->
				<!--mousemove img container-->
				<div class="mousemove_container wow fadeInDownBig" data-wow-duration="1s" data-wow-offset="2">
					<div class="services_img col l7 s12">
						<img src="../DemoGenerals/img/moc.png" alt="" class="responsive-img">
					</div>
				</div>
				<!--/end mousemove img container-->
				<!--services options-->
				<div class="services_options col l5 s12">
					<!--service box-->
					<div class="service_box wow fadeInRight" data-wow-duration="1s" data-wow-offset="2" data-wow-delay="0.2s">
						<i class="material-icons">color_lens</i>
						<div class="service_body">
							<h4>Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, repellat.</p>
						</div>
					</div>
					<!--/end service box-->
					<!--service box-->
					<div class="service_box wow fadeInRight" data-wow-duration="1s" data-wow-offset="2" data-wow-delay="0.4s">
						<i class="material-icons">code</i>
						<div class="service_body">
							<h4>Code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, repellat.</p>
						</div>
					</div>
					<!--/end service box-->
					<!--service box-->
					<div class="service_box wow fadeInRight" data-wow-duration="1s" data-wow-offset="2" data-wow-delay="0.6s">
						<i class="material-icons">personal_video</i>
						<div class="service_body">
							<h4>Functionality</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, repellat.</p>
						</div>
					</div>
					<!--/end service box-->
					<!--service box-->
					<div class="service_box wow fadeInRight" data-wow-duration="1s" data-wow-offset="2" data-wow-delay="0.8s">
						<i class="material-icons">contact_support</i>
						<div class="service_body">
							<h4>Support</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, repellat.</p>
						</div>
					</div>
					<!--/end service box-->
				</div>
				<!--/end services options-->
			</div>
			<!--Services container-->

			<!--Portfolio container-->
			<div id="portfolio" class="portfolio_wrapper">
				<!--header-->
				<header class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="2">
					<h1 class="color-text colour">UI & UX Design</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illum commodi aperiam! In quo enim esse, tenetur. Ab voluptatem alias aliquid harum corporis quos, pariatur libero ex ipsam beatae eius.</p>
				</header>
				<!--/end header-->
				<!--works grid -->
				<div class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="2">
					<!--filters-nav-->
					<div class="filters_nav">			
						<label for="app_development">App development</label> <!--filter-nav trigger-->
						<label for="photography">Photography</label>
						<label for="web_design">Web Design</label>
						<label for="reset">All</label>
					</div>
					<!--/end filters-nav-->
					<!--input for filters-nav -->
					<input type="radio" id="app_development" name="filter">
					<input type="radio" id="photography" name="filter">
					<input type="radio" id="web_design" name="filter">
					<input type="radio" id="reset" name="filter">
					<!--/end input for filters-nav-->
					<ul class="grid cs-style-1 row" id="portfolio-wrapper">
						<!--works grid item -->
						<li class="photography col l4 m6 s10 offset-s1"> <!--classes photography, web_design, app_development - define an item category-->
							<figure>
								<img src="../DemoGenerals/img/works/1.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<!--/end works grid item -->
						<!--works grid item -->
						<li class="web_design col l4 m6 s10 offset-s1">
							<figure>
								<img src="../DemoGenerals/img/works/2.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<!--/end works grid item -->
						<!--works grid item -->
						<li class="app_development col l4 m6 s10 offset-s1">
							<figure>
								<img src="../DemoGenerals/img/works/3.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<!--/end works grid item -->
						<!--works grid item -->
						<li class="photography col l4 m6 s10 offset-s1">
							<figure>
								<img src="../DemoGenerals/img/works/3.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<!--/end works grid item -->
						<!--works grid item -->
						<li class="app_development col l4 m6 s10 offset-s1">
							<figure>
								<img src="../DemoGenerals/img/works/4.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<!--/end works grid item -->
						<!--works grid item -->
						<li class="web_design col l4 m6 s10 offset-s1">
							<figure>
								<img src="../DemoGenerals/img/works/2.jpeg" alt="">
								<figcaption>
									<h3>Lorem ipsum</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi enim quisquam accusamus optio tempora eligendi, quae perferendis aspernatur in provident!</span>
								</figcaption>
							</figure>
						</li>
						<div class="clearfix"></div>
						<!--/end works grid item -->
					</ul>
				</div>
				<!--/end works grid-->
			</div>
			<!--/end Portfolio container-->

			<!--About container-->
			<div id="about" class="about_wrapper">
				<!--header-->
				<header class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="2">
					<h1 class="color-text colour">Synopsis</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illum commodi aperiam! In quo enim esse, tenetur. Ab voluptatem alias aliquid harum corporis quos, pariatur libero ex ipsam beatae eius.</p>
				</header>
				<!--/end header-->
				<div class="row wow fadeInRight" data-wow-duration="1s" data-wow-offset="2">
					<!--collapsible container -->
					<ul class="collapsible popout col xl10 m12 s12 offset-xl1">
						<!--about me - collapsible container item-->
						<li>
							<div class="collapsible-header"><i class="material-icons">fingerprint</i>About</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body about">
								<div class="row">
									<div class="about_text col xl10 offset-xl1">
										<h3>About Me</h3>
										<p class="color-text colour left-align">photographer, web designer & web developer</p>
										<p class="left-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ipsam incidunt quae voluptatem, mollitia placeat obcaecati aperiam sequi atque suscipit magnam dolore maiores debitis fuga praesentium quisquam tenetur harum sunt! Iusto quidem nesciunt obcaecati tempora eaque animi qui molestiae facere quia fugiat neque iure sunt, suscipit deserunt libero hic, excepturi et sequi nemo voluptate voluptas itaque nihil. Iure inventore odio alias praesentium id recusandae repudiandae, itaque deleniti ab quae, nobis rem animi odit officiis a obcaecati laboriosam ex at tempore?</p>
										<a  href="#!" class="custom_btn colourBg">DOWNLOAD CV</a>
									</div>
								</div>
							</div>
							<!--/end collapsible body-->
						</li>	
						<!--/end about me-->								
						<!--education - collapsible container item-->
						<li>
							<div class="collapsible-header"><i class="material-icons">school</i>Education</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body">
								<div class="row">
									<h3 class="center-align">My education</h3>
									<!--education item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>School</h4>
											<p class="date"><i class="material-icons">date_range</i>2005-2014</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end education item-->
									<!--education item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>College</h4>
											<p class="date"><i class="material-icons">date_range</i>20014-2018</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end education item-->
									<!--education item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>University</h4>
											<p class="date"><i class="material-icons">date_range</i>2018-2023</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end education item-->
								</div>
							</div>
							<!--/end collapsible body-->
						</li>
						<!--/end education-->

						<!--skills - collapsible container item-->
						<li>
							<div class="collapsible-header start_skills"><i class="material-icons">bar_chart</i>Skills</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body">
								<div class="row">
									<h3 class="center-align">My skills in web development</h3>
									<!--skills bar-->
									<ul id="skills_bar">
										<!--skills line-->
										<li>
											HTML
											<div class="bar-container">
												<span class="bar" data-bar='{ "color": "#19f" }'>
													<span class="pct">97%</span>
												</span>
											</div>
										</li>
										<!--/end skills line-->
										<!--skills line-->
										<li>
											CSS
											<div class="bar-container">
												<span class="bar" data-bar='{ "color": "#27ae60", "delay": 600 }'>
													<span class="pct">79%</span>
												</span>
											</div>
										</li>
										<!--/end skills line-->
										<!--skills line-->
										<li>
											PHP
											<div class="bar-container">
												<span class="bar" data-bar='{ "color": "#9b59b6", "delay": 1200 }'>
													<span class="pct">67%</span>
												</span>
											</div>
										</li>
										<!--/end skills line-->
										<!--skills line-->
										<li>
											JS
											<div class="bar-container">
												<span class="bar" data-bar='{ "color": "#ae8a33", "delay": 1800 }'>
													<span class="pct">30%</span>
												</span>
											</div>
										</li>
										<!--/end skills line-->
									</ul>
									<!--/end skills bar-->
								</div>
							</div>
							<!--/end collapsible body-->
						</li>
						<!--/end skills-->

						<!--Work experience - collapsible container item-->
						<li>
							<div class="collapsible-header"><i class="material-icons">work</i>Work</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body work">
								<div class="row">
									<h3 class="center-align">Working experience</h3>
									<!--Work item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>Freelance</h4>
											<p class="date"><i class="material-icons">date_range</i>2014-2020</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end Work item-->
									<!--Work item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>Web designer</h4>
											<p class="date"><i class="material-icons">date_range</i>2020-2022</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end Work item-->
									<!--Work item-->
									<div class="col xl4">
										<blockquote class="colourBr">
											<h4>Web developer</h4>
											<p class="date"><i class="material-icons">date_range</i>2018-2023</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci officia architecto, esse illum obcaecati numquam! Quibusdam molestiae at placeat, expedita</p>
										</blockquote>
									</div>
									<!--/end Work item-->
								</div>
							</div>
							<!--/end collapsible body-->
						</li>
						<!--/end work experience-->

						<!--Achievements - collapsible container item-->
						<li>
							<div class="collapsible-header start_count"><i class="material-icons">done_all</i>Achievements</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body achievements">
								<h3 class="center-align">My achievements</h3>
								<div class="count-wrap">
									<div class="row">
										<!--achievements item-->
										<div class="count col xl3 m6 s12">
											<h3 class="count_box color-text colour">735</h3>
											<p class="count_text">Happy customers</p>
										</div>
										<!--/end achievements item-->
										<!--achievements item-->
										<div class="count col xl3 m6 s12">
											<h3 class="count_box color-text colour">47</h3>
											<p class="count_text">Rewards </p>
										</div>
										<!--/end achievements item-->
										<!--achievements item-->
										<div class="count col xl3 m6 s12">
											<h3 class="count_box color-text colour">83</h3>
											<p class="count_text">Done projects</p>
										</div>
										<!--/end achievements item-->
										<!--achievements item-->
										<div class="count col xl3 m6 s12">
											<h3 class="count_box color-text colour">9</h3>
											<p class="count_text">Years experience</p>
										</div>
										<!--/end achievements item-->
									</div>
								</div>
							</div>
							<!--/end collapsible body-->
						</li>
						<!--/end achievements-->

						<!--contact - collapsible container item-->
						<li>
							<div class="collapsible-header start_count"><i class="material-icons">perm_phone_msg</i>Contact</div><!--collapsible header-->
							<!--collapsible body-->
							<div class="collapsible-body">
								<div class="row">
									<!--addres block -->
									<div class="addres-block col xl6 l6 m10 s12 push-m2">
										<p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, dolorem.</p>
										<p><span class="color-text colour">Adress:</span> 13 Apple Street New York City, US</p>
										<p><span class="color-text colour">Phone:</span> 212-214-7480</p>
										<p><span class="color-text colour">Email:</span> random@gmail.com</p>
										<p><span class="color-text colour">Hours: </span> Monday - Friday: 8am - 6pm</p>
										<p class="social_media">
											<span class="color-text colour">Social-media:</span> 
											<a href="https://www.freepik.com/"><img src="../DemoGenerals/img/social-media/twitter.svg" title="Icons made by freepik from flaticon.com" alt="" class="responsive-img"></a>
											<a href="https://www.freepik.com/"><img src="../DemoGenerals/img/social-media/telegram.svg" title="Icons made by freepik from flaticon.com" alt="" class="responsive-img"></a>
											<a href="https://www.freepik.com/"><img src="../DemoGenerals/img/social-media/google-plus.svg" title="Icons made by freepik from flaticon.com" alt="" class="responsive-img"></a>
										</p>
									</div>
									<!--/end addres-block-->

									<!--input form block-->
									<form method="POST" action="../DemoGenerals/../DemoGenerals/send_form.php" class="col xl6 l6 m8 s12 push-m2">
										<input type="hidden" name="fileName" value="../offCanvasTheme/parallax">
										<!--input name-->
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<input id="icon_prefix" name="name" type="text" class="validate">
											<label for="icon_prefix">Your Name</label>
										</div>
										<!--/end input name-->
										<!--input phone-->
										<div class="input-field">
											<i class="material-icons prefix">phone</i>
											<input id="icon_telephone" name="tel" type="tel" class="validate">
											<label for="icon_telephone">Telephone</label>
										</div>
										<!--/end input phone-->
										<!--input email-->
										<div class="input-field">
											<i class="material-icons prefix">alternate_email</i>
											<input id="email" name="email" type="email" class="validate">
											<label for="email">Email</label>
										</div>
										<!--/end input email-->
										<!--input message-->
										<div class="input-field">
											<i class="material-icons prefix">mode_edit</i>
											<textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
											<label for="icon_prefix2">Message</label>
										</div>
										<!--/end input message-->
										<!--submit button-->
										<button name="send_form" class="custom_btn colourBg right" type="submit">Submit</button>
										<!--/end submit button-->
									</form>
									<!--/end input form block-->
								</div>
							</div>
							<!--/end collapsible body-->
						</li>
						<!--/end contact-->
					</ul>
					<!--/end collapsible container -->
				</div>
			</div>
			<!--/end About container-->
		</div>
		<!--/end content-->
	</div>
	<!--/end page -->

	<!-- Panel items for blog -->
	<div class="bl-panel-items" id="bl-panel-work-items">
		<!-- Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-1">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/01.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog" name="name" type="text" class="validate">
							<label for="icon_prefix_blog">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog" name="email" type="email" class="validate">
							<label for="email_blog">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search1" type="search" required>
						<label class="label-icon" for="search1"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div class="post_thumb col xl4">
							<a href="#!">
								<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
							</a>
						</div>
						<div class="post_info col xl8">
							<h5>Amount The giants</h5>
							<p class="date">DEC 17, 2018</p>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div class="post_thumb col xl4">
							<a href="#!">
								<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
							</a>
						</div>
						<div class="post_info col xl8">
							<h5>Amount The giants</h5>
							<p class="date">DEC 17, 2018</p>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div class="post_thumb col xl4">
							<a href="">
								<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
							</a>
						</div>
						<div class="post_info col xl8">
							<h5>Amount The giants</h5>
							<p class="date">DEC 17, 2018</p>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div class="post_thumb col xl4">
							<a href="#!">
								<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
							</a>
						</div>
						<div class="post_info col xl8">
							<h5>Amount The giants</h5>
							<p class="date">DEC 17, 2018</p>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-2">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/02.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog1" name="name" type="text" class="validate">
							<label for="icon_prefix_blog1">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog1" name="email" type="email" class="validate">
							<label for="email_blog1">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea1" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea1">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search2" type="search" required>
						<label class="label-icon" for="search2"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-3">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/03.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog2" name="name" type="text" class="validate">
							<label for="icon_prefix_blog2">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog2" name="email" type="email" class="validate">
							<label for="email_blog2">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea2" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea2">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search3" type="search" required>
						<label class="label-icon" for="search3"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-4">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/04.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog3" name="name" type="text" class="validate">
							<label for="icon_prefix_blog3">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog3" name="email" type="email" class="validate">
							<label for="email_blog3">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea3" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea3">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search4" type="search" required>
						<label class="label-icon" for="search4"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-5">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/05.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog4" name="name" type="text" class="validate">
							<label for="icon_prefix_blog4">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog4" name="email" type="email" class="validate">
							<label for="email_blog4">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea4" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea4">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search5" type="search" required>
						<label class="label-icon" for="search5"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-6">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/06.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog5" name="name" type="text" class="validate">
							<label for="icon_prefix_blog5">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog5" name="email" type="email" class="validate">
							<label for="email_blog5">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea5" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea5">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search6" type="search" required>
						<label class="label-icon" for="search6"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-7">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/07.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog6" name="name" type="text" class="validate">
							<label for="icon_prefix_blog6">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog6" name="email" type="email" class="validate">
							<label for="email_blog6">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea6" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea6">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search7" type="search" required>
						<label class="label-icon" for="search7"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-8">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/08.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog7" name="name" type="text" class="validate">
							<label for="icon_prefix_blog7">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog7" name="email" type="email" class="validate">
							<label for="email_blog7">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea7" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea7">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search8" type="search" required>
						<label class="label-icon" for="search8"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel item-->
		<div data-panel="panel-9">
			<div class="row">
				<!--article-->
				<div class="col xl8 l8 m10 offset-m1 s12 article">
					<h3 class="card-header color-text colour">Amongst the giants</h3>
					<img src="../DemoGenerals/img/blog/09.jpg" alt="project" class="">
					<!--details-->
					<ul class="project-details date">
						<li><i class="material-icons">date_range</i>&nbsp;DEC 17, 2018</li>
						<li><i class="material-icons">remove_red_eye</i>&nbsp;321</li>
						<li><a href="#!"><span class="chip">travels</span></a></li>
						<li><a href="#!"><span class="chip">life</span></a></li>
					</ul>
					<!--/end details-->
					<p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptas illo possimus, voluptatum quo cumque, laudantium quisquam dolor asperiores numquam, officiis, maxime iure sed? Itaque laudantium voluptate, illum deleniti recusandae, perspiciatis nesciunt fugiat, tempore impedit asperiores doloribus, at odit incidunt corporis sint vero voluptatem ab cupiditate. Harum aspernatur laboriosam error atque impedit laborum est, quos ratione velit enim sint rem reiciendis dicta, neque iusto dolor recusandae eius eaque aperiam commodi similique. Animi, assumenda necessitatibus id debitis qui porro amet, at ratione sunt mollitia molestias et fugit corrupti architecto impedit nesciunt! Rem pariatur voluptatibus cupiditate, dicta reprehenderit atque, facere beatae nam eum praesentium minima sint deserunt corporis nostrum vero, deleniti laborum reiciendis asperiores unde? Minus molestias, dignissimos, voluptatem explicabo quod nulla blanditiis ipsum amet dolore eos neque animi ducimus repellendus quas quidem laboriosam enim quis! Totam in nihil quis cupiditate officia pariatur, veritatis tenetur! Atque doloribus libero sequi quibusdam quidem vel, quo rerum cum maxime dolore ipsum ex laborum repellat quia corporis veritatis error reprehenderit alias doloremque, suscipit. Soluta non, quam, illum laborum fugiat consequatur quas animi eum repudiandae tenetur, magnam optio hic. Quasi quibusdam perspiciatis ipsum omnis voluptas aperiam fuga excepturi nobis. Nobis rerum impedit veritatis ex dolorem debitis, illum eius architecto numquam asperiores laudantium enim accusamus. Doloribus porro inventore eum atque, tempore. Ea id aperiam odit illum blanditiis magnam eum fugit ipsum at esse mollitia nisi ex reiciendis nobis eaque vel voluptatibus quas tempore expedita cumque, velit iusto ducimus sapiente fugiat quis. Quibusdam sequi eaque doloremque voluptas sed.</p>
					<!--comments-->
					<!--comment-->
					<div class="comment first_comment row">
						<h3 class="color-text colour">9 Comments</h3>
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--comment replies-->
					<div class="comment replies row">
						<div class="circle col xl2 push-xl1 push-l1 push-m1" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl9 l9 m11 s11 push-xl1 push-l1 push-m1 push-s1">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Jon Doe, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment replies-->
					<!--comment-->
					<div class="comment row">
						<div class="circle left" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
						<div class="comment_body col xl10 l10 m12 s12">
							<div class="comment_info ">
								<p>Jon Doe</p>
								<p class="date">DEC 17, 2018</p>
							</div>
							<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque, quibusdam qui sed id nisi! Ducimus quo asperiores velit in!</p>
							<a href="#!" class="right">Reply</a>
						</div>
					</div>
					<!--/end comment-->
					<!--/end comments-->
					<!--submit comments-->
					<form method="POST" class="col s12">
						<h3 class="color-text colour">leave a comment</h3>
						<!--input name-->
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix_blog8" name="name" type="text" class="validate">
							<label for="icon_prefix_blog8">Your Name</label>
						</div>
						<!--/end input name-->
						<!--input email-->
						<div class="input-field">
							<i class="material-icons prefix">alternate_email</i>
							<input id="email_blog8" name="email" type="email" class="validate">
							<label for="email_blog8">Email</label>
						</div>
						<!--/end input email-->
						<!--input message-->
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix_blog_texterea8" name="message" class="materialize-textarea"></textarea>
							<label for="icon_prefix_blog_texterea8">Comment</label>
						</div>
						<!--/end input message-->
						<!--submit button-->
						<button name="send_form" class="custom_btn colourBg right" type="submit">Send</button>
						<!--/end submit button-->
					</form>
					<!--/end submit comments-->
				</div>
				<!--/end article-->
				<!--Panel item sidebar-->
				<div class="col xl4 l4 m10 offset-m1 s12">
					<!--search widget-->
					<div class="search widget input-field">
						<input id="search9" type="search" required>
						<label class="label-icon" for="search9"><i class="material-icons">search</i></label>
					</div>
					<!--/end search widget-->
					<!--recent posts widget-->
					<div class="recent_posts widget">
						<h4 class="color-text colour">recent posts</h4>
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/07.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div><!--set clear: botch-->
						<div class="divider"></div> <!--horozontal line-->
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/02.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/05.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="divider"></div>
						<!--/end single recent post-->
						<!--single recent post-->
						<div>
							<div class="post_thumb col xl4">
								<a href="#!">
									<div class="col xl4 circle" style="background-image: url(../DemoGenerals/img/blog/09.jpg);"></div>
								</a>
							</div>
							<div class="post_info col xl8">
								<h5>Amount The giants</h5>
								<p class="date">DEC 17, 2018</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--/end single recent post-->
					</div>
					<!--/end recent post widget-->
					<!--tags widget-->
					<div class="tags widget">
						<h4 class="color-text colour">tags</h4>
						<ul>
							<li><a href="#!"><span class="chip">travels</span></a></li>
							<li><a href="#!"><span class="chip">code</span></a></li>
							<li><a href="#!"><span class="chip">life</span></a></li>
							<li><a href="#!"><span class="chip">work</span></a></li>
							<li><a href="#!"><span class="chip">mind</span></a></li>
							<li><a href="#!"><span class="chip">design</span></a></li>
							<li><a href="#!"><span class="chip">art</span></a></li>
						</ul>
					</div>
					<!--/end tags widget-->
					<!--archive widget-->
					<div class="archive widget">
						<h4 class="color-text colour">Archive</h4>
						<a href="#!">January</a>
						<div class="divider"></div>
						<a href="#!">February</a>
						<div class="divider"></div>
						<a href="#!">March</a>
						<div class="divider"></div>
						<a href="#!">April</a>
						<div class="divider"></div>
					</div>
					<!--/end archive widget-->
				</div>
				<!--/end Panel item sidebar-->
			</div>
		</div>
		<!--/end Panel item-->
		<!-- Panel items nav-->
		<nav>
			<span class="control-button bl-previous-work"><i class="material-icons">keyboard_arrow_left</i></span>
			<span class="bl-icon-close"><i class="material-icons">close</i></span>
			<span class="control-button bl-next-work"><i class="material-icons">keyboard_arrow_right</i></span>
		</nav>
		<!--/end Panel items nav-->
	</div>
	<!--/end Panel items for the blog -->

	<!--material icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--JQ-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!--materializa.js-->
	<script src="../DemoGenerals/libs/materialize/js/materialize.min.js"></script>
	<!--modernizr-->
	<script src="BoxLayout/modernizr.custom.js"></script>
	<!--BoxLayout-->
	<script src="BoxLayout/boxlayout.js"></script>
	<!--JALISWALL-->
	<script src="../DemoGenerals/libs/jaliswall/JALISWALL.js"></script>
	<!--baffle-->
	<script src="../DemoGenerals/libs/baffle/baffle.min.js"></script>
	<!--animated css-->
	<link rel="stylesheet" href="../DemoGenerals/libs/wow js/animate.min.css">
	<!--wow js-->
	<script src="../DemoGenerals/libs/wow js/wow.min.js" ></script>
	<!--main-->
	<script src="js/main.js"></script>
	<!--demo-->
	<link rel="stylesheet" href="../DemoGenerals/dd/main.css">
</body>
</html>

<?php
$change = $_POST;
if(isset($change['change-color'])) {
if ($change) {
echo '
<style>
	body .color-text {
		color: #'.$change['custom-color'].'!important;
	}

	div .meta_post
	{
		color: #'.$change['custom-color'].'!important;
	}

	div.bl-panel-items>div>div hr, .divider {
		background: #'.$change['custom-color'].'!important;
	}

	blockquote {
		border-color: #'.$change['custom-color'].'!important;
	}

	.custom_btn {
		background-color: #'.$change['custom-color'].'!important;
	}
	form .input-field input:focus + label {
		color: #'.$change['custom-color'].'!important;
	}
	form .input-field input:focus {
		border-bottom: 1px solid #'.$change['custom-color'].'!important;
		box-shadow: 0 1px 0 0 #'.$change['custom-color'].'!important;
	}
	.input-field .prefix.active {
		color: #'.$change['custom-color'].'!important;
	}
	form .input-field textarea:focus + label {
		color: #'.$change['custom-color'].'!important;
	}
	form .input-field textarea:focus {
		border-bottom: 1px solid #'.$change['custom-color'].'!important;
		box-shadow: 0 1px 0 0 #'.$change['custom-color'].'!important;
	}
</style>
';
}
if (isset($change['reset'])) {
unset($change);
}
}

if (isset($change['change-portfolio'])) {
if ($change['radiobutton'] === "2") {
echo '<style>input[type="radio"][id="app_development"]:checked ~ ul > li.photography,
input[type="radio"][id="app_development"]:checked ~ ul > li.web_design {
	opacity: .1;
}

input[type="radio"][id="photography"]:checked ~ ul > li.app_development,
input[type="radio"][id="photography"]:checked ~ ul > li.web_design {
	opacity: .1;
}

input[type="radio"][id="web_design"]:checked ~ ul > li.app_development,
input[type="radio"][id="web_design"]:checked ~ ul > li.photography {
	opacity: .1;
}</style>';
}
if ($change['radiobutton'] === "1") {
echo '<style>input[type="radio"][id="app_development"]:checked ~ ul > li.photography,
input[type="radio"][id="app_development"]:checked ~ ul > li.web_design {
	opacity: 0;
}

input[type="radio"][id="photography"]:checked ~ ul > li.app_development,
input[type="radio"][id="photography"]:checked ~ ul > li.web_design {
	opacity: 0;
}

input[type="radio"][id="web_design"]:checked ~ ul > li.app_development,
input[type="radio"][id="web_design"]:checked ~ ul > li.photography {
	opacity: 0;
}</style>';
}
if ($change['radiobutton'] === "0") {
echo '<style>input[type="radio"][id="app_development"]:checked ~ ul > li.photography,
input[type="radio"][id="app_development"]:checked ~ ul > li.web_design {
	width: 0;
	height: 0;
	padding: 0;
	margin: 0;
	opacity: 0;
}

input[type="radio"][id="photography"]:checked ~ ul > li.app_development,
input[type="radio"][id="photography"]:checked ~ ul > li.web_design {
	width: 0;
	height: 0;
	padding: 0;
	margin: 0;
	opacity: 0;
}

input[type="radio"][id="web_design"]:checked ~ ul > li.app_development,
input[type="radio"][id="web_design"]:checked ~ ul > li.photography {
	width: 0;
	height: 0;
	padding: 0;
	margin: 0;
	opacity: 0;
}</style>';
}
if (isset($change['reset'])) {
unset($change);
}
}
?>
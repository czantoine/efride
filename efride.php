<!DOCTYPE html>
<html lang="fr" >

<?php include ("head.php"); ?>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,700'>
<link rel="stylesheet" href="css/styleteam.css">

<body>
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v6.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		attribution=setup_tool
		page_id="569672709803629"
		theme_color="#fa3c4c"
		logged_in_greeting="Bonjour, on peut aider ? "
		logged_out_greeting="Bonjour, on peut aider ? ">
	</div>

	<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">


		<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
			<div class="container">

				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top"><img class="logo" src="img/efride.png"></a>
				</div>


				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden active">
							<a href="#page-top"></a>
						</li>
						<li class="">
							<a class="page-scroll" href="#services">S'inscrire</a>
						</li>
						<li class="">
							<a class="page-scroll" href="#portfolio">Activités</a>
						</li>
						<li class="">
							<a class="page-scroll" href="#about">Notre histoire</a>
						</li>
						<li class="">
							<a class="page-scroll" href="#team">Team</a>
						</li>
						<li class="">
							<a class="page-scroll" href="#contact">Contact</a>
						</li>
						<li class="">
							<a class="page-scroll" href="shop.php">Shop</a>
						</li>
					</ul>
				</div>

			</div>

		</nav>


		<header>
			<div class="container">
				<div class="intro-text">
					<div class="intro-lead-in">Hello !</div>
					<div class="intro-heading">RIDE OR DIE</div>
					<a href="#services" class="page-scroll btn btn-xl">S'inscrire</a>
				</div>
			</div>
		</header>

		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">S'inscrire</h2>
						<h3 class="section-subheading text-muted">Ride anytime ! Ride anywhere !</h3>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="glyphicon glyphicon-header"></i>
						</span>
						<h4 class="service-heading">Hock'efrei</h4>
						<p class="text-muted">Le Hock'Efrei est l'association de hockey sur glace de l'école d'ingénieurs généralistes du numerique Efrei Paris. Elle représente la toute 1ère équipe universitaire française !</p>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="glyphicon glyphicon-fire"></i>
						</span>
						<a href="adhesions.php"><h4 class="service-heading">EF'Ride</h4></a>
						<p class="text-muted">EF’Ride est une association de l’EFREI, ayant pour but de rassembler le plus grand nombre de personnes partageant la même passion : la glisse, les sports extremes et la ride !</p>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="glyphicon glyphicon-road"></i>
						</span>
						<h4 class="service-heading">EFREI Dirt Camp</h4>
						<p class="text-muted">Si vous adorez descendre des montagnes en DH, faire des back en dirt, bricoler des vélos ou encore faire simplement des petites balades en vélo. Rejoignez nous !</p>
					</div>
				</div>
			</div>
		</section>


		<section id="portfolio" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Activités</h2>
						<h3 class="section-subheading text-muted">Plus de 10 disciplines...</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal"> <!--href="#portfolioModal1"-->
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="https://images.unsplash.com/photo-1564947879483-2c9f372f0aca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Longboard</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/skate.jpeg" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Skateboard</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="https://images.unsplash.com/photo-1575430933675-6d2aa86b4e9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Cruiser</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/roller.jpeg" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Roller</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="https://images.unsplash.com/photo-1526485856375-9110812fbf35?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Surf</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/efrei_dirt_camp.jpeg" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Vélo</h4>
							<p class="text-muted"></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/soireepatinoire.jpeg" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Patinoire</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/snow.jpeg" class="img-responsive" alt="ef'ride">
						</a>
						<div class="portfolio-caption">
							<h4>Snowboard</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/hockefrei.jpeg" class="img-responsive" alt="Hock'efrei">
						</a>
						<div class="portfolio-caption">
							<h4>Hockey sur glace</h4>
							<p class="text-muted"></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="https://images.unsplash.com/photo-1576282577948-50480284e7b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="img-responsive" alt="EF'Ride">
						</a>
						<div class="portfolio-caption">
							<h4>BMX</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a  class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/wakeboard.jpeg" class="img-responsive" alt="EF'Ride">
						</a>
						<div class="portfolio-caption">
							<h4>Wakeboard</h4>
							<p class="text-muted"></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/rollera.jpeg" class="img-responsive" alt="EF'Ride">
						</a>
						<div class="portfolio-caption">
							<h4>Roller agressif</h4>
							<p class="text-muted"></p>
						</div>
					</div>
				</div>
			</section>

			<!-- About Section -->
			<section id="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Notre histoire...</h2>
							<h3 class="section-subheading text-muted"></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<ul class="timeline">
								<li>
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/ancienlogo.png" alt="ancien logo efride">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>Mars 2014</h4>
											<h4 class="subheading">Création d'EF'Ride</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">Valentin B. pionnier d'EF'Ride.<br/>
											Introduit les disciplines tels que le roller, le wakeboard, le bmx, le skate à Efrei - Esigetel.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/logoefride.png" alt="logo EF'Ride">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>Septembre 2016</h4>
											<h4 class="subheading">Nouveau bureau associatif</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">Stephen A. reprend l'association. Refonte de l'association : nouveau logo, nouveaux membres, nouvelles disciplines. Nouveau rythme.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/space.png" alt="space efride">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>2018</h4>
											<h4 class="subheading">Création de l'association</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">EF'Ride devient indépendant, association loi 1901.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-image">
										<img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4>2020</h4>
											<h4 class="subheading">SLS</h4>
										</div>
										<div class="timeline-body">
											<p class="text-muted">Student League Skateboarding</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-image">
										<h4>EF'RIDE
											<br>JO 2024
											<br>PARIS</h4>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>


				<section id="team">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">TEAM</h2>
							<h3 class="section-subheading text-muted"></h3>
						</div>
					</div>
					<div class="container">
						<div class="row flex-center sm-no-flex">
							<div class="pull-right sm-no-float col-md-8">

								<ul class="team-members">
									<li class="clearfix">
										<div class="member-details">
											<div>
												<img src="img/team/stephen.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Stephen</h3>
													<p>Président</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/pp.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Léo</h3>
													<p>Vice-président</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/pp.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Aurélien</h3>
													<p>Sécrétaire</p>
												</div>
											</div>
										</div>
									</li><!-- /single member row ends -->

									<!-- single member row starts -->
									<li class="clearfix">
										<div class="member-details">
											<div>
												<img src="img/team/julie.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Julie</h3>
													<p>Marraine</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/antoine.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Antoine</h3>
													<p>Trésorier</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/josia.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Josia</h3>
													<p>Vice-trésorière</p>
												</div>
											</div>
										</div>
									</li><!-- /single member row ends -->

									<!-- single member row starts -->
									<li class="clearfix">
										<div class="member-details">
											<div>
												<img src="img/team/pp.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Damien</h3>
													<p>Parrain</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/pp.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Alexandre</h3>
													<p>Communication</p>
												</div>
											</div>
										</div>

										<div class="member-details">
											<div>
												<img src="img/team/pp.png" alt="EF'Ride">
												<div class="member-info">
													<h3>Etienne</h3>
													<p>Graphiste</p>
												</div>
											</div>
										</div>
									</li>

								</ul>
							</div>

							<div class="pull-left col-md-4 sm-text-center">
								<div class="team-overview">
									<h1>Qui sommes-nous ?</h1>
									<h3 class="section-subheading text-muted">Venez à la rencontre de l'équipe</h3>
									<p><div>EF'Ride, à sa création c'est un groupe de pote qui avait envie de rider le bitume de paname. Maintenant c'est plus de 80 personnes, plusieurs disciplines réparti en pôle et un club de hockey sur glace.</div></p>
								</div>
							</div>
						</div>
					</div>
				</section>


				<?php include ("footer.php"); ?>


				<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<!-- Project Details Go Here -->
										<h2>Project Name</h2>
										<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
										<img class="img-responsive" src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" alt="">
										<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
										<p>
											<strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
											<ul class="list-inline">
												<li>Date: July 2014</li>
												<li>Client: Round Icons</li>
												<li>Category: Graphic Design</li>
											</ul>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Portfolio Modal 2 -->
					<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="modal-body">
											<h2>Project Heading</h2>
											<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
											<img class="img-responsive img-centered" src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" alt="">
											<p><a href="https://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
											<p>You can preview Startup Framework <a href="https://designmodo.com/startup/?u=787">here</a>.</p>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Portfolio Modal 3 -->
					<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="modal-body">
											<!-- Project Details Go Here -->
											<h2>Project Name</h2>
											<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
											<img class="img-responsive img-centered" src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" alt="">
											<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
											<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Portfolio Modal 4 -->
					<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="modal-body">
											<!-- Project Details Go Here -->
											<h2>Project Name</h2>
											<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
											<img class="img-responsive img-centered" src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" alt="">
											<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
											<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Portfolio Modal 5 -->
					<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="modal-body">
											<!-- Project Details Go Here -->
											<h2>Project Name</h2>
											<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
											<img class="img-responsive img-centered" src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" alt="">
											<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
											<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Portfolio Modal 6 -->
					<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="modal-body">
											<!-- Project Details Go Here -->
											<h2>Project Name</h2>
											<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
											<img class="img-responsive img-centered" src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" alt="">
											<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
											<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- jQuery Version 1.11.0 -->
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>

					<!-- Bootstrap Core JavaScript -->
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js"></script>

					<!-- Plugin JavaScript -->
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js"></script>
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js"></script>

					<!-- Contact Form JavaScript -->
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js"></script>
					<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js"></script>


					<span style="height: 20px; width: 40px; min-height: 20px; min-width: 40px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAADU0lEQVR42s2WXUhTYRjHz0VEVPRFUGmtVEaFUZFhHxBhsotCU5JwBWEf1EWEEVHQx4UfFWYkFa2biPJiXbUta33OXFtuUXMzJ4bK3Nqay7m5NeZq6h/tPQ+xU20zugjOxR/+7/O8539+5znnwMtNTExwJtMb3L/fiLv3botCSmUjeCaejTOb39AiFothfHxcFIrHY8RksZjBsckJcOIRMfFsHD/SsbExUYpnI8DR0dGUGjSb0byhEJp5Uqg5CTSzc2CQleJbMEj9/ywBcGRkJEk9DQqouEVQT1sK444yWI9UonmTjGqauVLEIlHa9x8lAMbj8SSpp0rwKGMVvg8P46vbg0C7na8z8JsMcgHe7jlEa+edRhiLy8n/TUMfu6EvLElk+U0WtGwrTrdfAGQf5J8iiK4LVzDU28t8JtMSocf8E+l68myaNFXm/6rXslLK7ay5TOunuRvZWpJuvwAYjUaTpOIWoquuAZ219RTaxKYp9BbjycoN5FvL9qH9TBX5rvoGdJythvXYSTxdtRnWylO/ZdqrLsGwszzhWQ593z2KlAwCYCQSSZJ6ehZ0W7bD9VBLgN0NCqr3qR7R2rBrL3pu3Sb/7nDlz2uy6cG0OXk0GTbZXzNp8trsPAQdTj6frlWzN2DcXZGKQQAMh8NJ6rpyHe+PnkCr/CAFdZyvpfpjuvkifLF9wIt1Wwlo0OHie1RvWrKa93RjzfzliTzPKz3ltB0/Tevmwp14wGUgHAzSOoUEwFAolFaaBSuhnslPRkJexUJtZ6v5HtUeLswl33n1BgEY5fvhs9sJ3FAiT+QYyyvoAQJuD0KBAFRTJNAuz5/s3gJgMBhMJwrVFRThM5tY5zUF/A4X1f2fvQTRLCuBreoim0YmAbqNJryvPEXeeq46kaNdkQ/1HCncbJKPs9ZSv2VHGfWsZ2hfkhKAfr8/pdxWKx4wwD69PmVfNSOL+lr2w+gYqHpWDtXt1xQ8AMlWU0e1lqLd/APRHoP8AJqWrQG9gYxcPMsvSJUvAA4MDKTUJ7MZLaVy8v+qT21tcDx/OemePr0RTkNrur4A6PP5xCgBsL+/X4wiQDpuuVxOeL1eMYmYeDY6sOp0z+B0OuHxeEQhxkJMFosJiSO/UinOI/8Pc+l7KKArAT8AAAAASUVORK5CYII=);"></span></body>
					<!-- partial -->
					<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
					<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script><script  src="./script.js"></script>



				</body>
				</html>

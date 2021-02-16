<!DOCTYPE html>
<html lang="fr" >
<?php include ("head.php"); ?>

<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="css/styleshop.css">


<body>

	<?php include ("menu.php"); ?> 


	<div class="wrapper">

		<div class="content">
			<div class="bg-shape">
				<img src="img/efridelettre.png" alt="">
			</div>

			<div class="product-img">

				<div class="product-img__item" id="img1">
					<img src="img/shop/casquetteefride.png" alt="casquette ef'ride">
				</div>

				<div class="product-img__item" id="img2">
					<img src="img/shop/deckserie2.png" alt="deck" class="product-img__img">
				</div>

				<div class="product-img__item" id="img3">
					<img src=img/shop/sweat.png alt="sweat" class="product-img__img">
				</div>

				<div class="product-img__item" id="img4">
					<img src="img/shop/space-edition.png" alt="deck space edition EF'Ride" class="product-img__img">
				</div>

				<div class="product-img__item" id="img5">
					<img src="img/shop/gourdeefride.png" alt="gourde EF'Ride">
				</div>


			</div>



			<div class="product-slider">
				<button class="prev disabled">
					<span class="icon">
						<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
					</span>
				</button>
				<button class="next">
					<span class="icon">
						<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
					</span>
				</button>

				<div class="product-slider__wrp swiper-wrapper">
					<div class="product-slider__item swiper-slide" data-target="img4">
						<div class="product-slider__card">
							<img src="img/shop/back1.png	" alt="EF'Ride" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									DECK<br>
									SPACE EDITION
								</h1>
								<span class="product-slider__price">30 € <sup>00</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">DECK SIZE</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type5" >
												<span class="product-labels__txt">7.75</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type5" checked>
												<span class="product-labels__txt">8.00</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type5" >
												<span class="product-labels__txt">8.125</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type5" >
												<span class="product-labels__txt">8.25</span>
											</label>

										</div>

									</div>

									<span class="hr-vertical"></span>

									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
													<defs>
														<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="290, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												99%
											</div>
										</div>

										<span class="product-inf__title">SPACE</span>
									</div>

								</div>

								<div class="product-slider__bottom">
									<a href="order.php">
										<button class="product-slider__cart">
											ACHETER
										</button>
									</a>

									<button class="product-slider__fav js-fav"><span class="heart"><a href="https://www.youtube.com/watch?v=CkkLE1lxClo" target="_blank"></span> VOIR LA VIDÉO</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="product-slider__item swiper-slide" data-target="img1">
						<div class="product-slider__card">
							<img src="https://cdnb.artstation.com/p/assets/images/images/001/724/661/large/scott-richard-space-background-1-v1-1920.jpg?1451804720" alt="background" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									CASQUETTE<br> EF'RIDE
								</h1>
								<span class="product-slider__price">25 € <sup>00</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">SIZE</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type1" checked>
												<span class="product-labels__txt">L</span>
											</label>

											
										</div>

									</div>

									<span class="hr-vertical"></span>

									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
													<defs>
														<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="260, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												90%
											</div>
										</div>

										<span class="product-inf__title">DURABILITY</span>
									</div>

								</div>

								<div class="product-slider__bottom">
									<a href="order.php">
										<button class="product-slider__cart">
											ACHETER
										</button>
									</a>

									
								</div>
							</div>
						</div>
					</div>

					<div class="product-slider__item swiper-slide" data-target="img5">
						<div class="product-slider__card">
							<img src="img/shop/metall.jpeg" alt="background" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									GOURDE<br> EF'RIDE
								</h1>
								<span class="product-slider__price">25 € <sup>00</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">SIZE</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type1" checked>
												<span class="product-labels__txt">500 ml</span>
											</label>

											
										</div>

									</div>

									<span class="hr-vertical"></span>

									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
													<defs>
														<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="290, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												99%
											</div>
										</div>

										<span class="product-inf__title">STAINLESS</span>
									</div>

								</div>

								<div class="product-slider__bottom">
									<a href="order.php">
										<button class="product-slider__cart">
											ACHETER
										</button>
									</a>

									
								</div>
							</div>
						</div>
					</div>

					<div class="product-slider__item swiper-slide" data-target="img2">
						<div class="product-slider__card">
							<img src="https://i.pinimg.com/originals/f6/20/a1/f620a179ca1acfd15a0754701677fb58.jpg" alt="background" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									DECK <br> SÉRIE 2
								</h1>
								<span class="product-slider__price">50 € <sup>00</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title"> <br> <br> <br> DECK SIZE</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type3" checked>
												<span class="product-labels__txt">CLASSIC<sup>BOARD</sup></span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type3">
												<span class="product-labels__txt">OLD<sup>SCHOOL</sup></span>
											</label>
										</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type2" >
												<span class="product-labels__txt">8.00</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type2" checked>
												<span class="product-labels__txt">8.125</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type2" >
												<span class="product-labels__txt">8.225</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type2" >
												<span class="product-labels__txt">8.325</span>
											</label>

										</div>

									</div>

									<span class="hr-vertical"></span>

									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
													<defs>
														<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="300, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												100%
											</div>
										</div>

										<span class="product-inf__title">CREATIVITY</span>
									</div>

								</div>

								<div class="product-slider__bottom">
									<a href="order.php">
										<button class="product-slider__cart">
											ACHETER
										</button>
									</a>

									<button class="product-slider__fav js-fav"><span class="heart"><a href="" ></span> L'interview du designer</button></a>
								</div>
							</div>
						</div>
					</div>

					<div class="product-slider__item swiper-slide" data-target="img3">
						<div class="product-slider__card">
							<img src="https://img.freepik.com/free-photo/milky-way-starry-sky-background_34011-265.jpg" alt="star wars" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									SWEAT <br>
									EF'Ride
								</h1>
								<span class="product-slider__price">20 € <sup>00</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title"></div>

									
										<div class="product-labels__title">SIZE</div>

										<div class="product-labels__group">
											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type7" checked>
												<span class="product-labels__txt">M</span>
											</label>

											<label class="product-labels__item">
												<input type="radio" class="product-labels__checkbox" name="type7">
												<span class="product-labels__txt">L</span>
											</label>
										</div>

									</div>

									<span class="hr-vertical"></span>

									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
													<defs>
														<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												80%
											</div>
										</div>

										<span class="product-inf__title">DURABILITY RATE</span>
									</div>

								</div>

								<div class="product-slider__bottom">
									<a href="order.php">
										<button class="product-slider__cart">
											ACHETER
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>

					

				</div>
			</div>

		</div>


	</div>
	<svg class="hidden" hidden>
		<symbol id="icon-arrow-left" viewBox="0 0 32 32">
			<path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
		</symbol>
		<symbol id="icon-arrow-right" viewBox="0 0 32 32">
			<path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
		</symbol>
	</svg>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./scriptshop.js"></script>


	<?php include ("footer.php"); ?>

</body>
</html>

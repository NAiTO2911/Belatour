<?php helper('utils'); ?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div id="content-wrap">

				<!-- === Our Services =========== -->
				<div id="our-services" class="flat-section our-services" data-scroll-index="1">

					<div class="section-title">

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">

									<h2>Our great services</h2>
									<p>There was not a detail left undone and our history trip was a wonderful experience for everyone. The flexibility, professionalism, and constant attention to detail was unmatched by any tour company have worked with us.</p>

								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-title end -->

					<div class="section-content">

						<div class="container">
							<!-- Three columns of text below the carousel -->
							<div class="row">
								<div class="col-lg-4" style="text-align: center">
									<img class="img-circle" src="<?php echo base_url() ?>/assets/images/files/portfolio/Ellipse-13.png" alt="Haven’t Survey? No Worries!" width="140" height="140">
									<h3>Haven't Survey? No Worries!</h3>
									<p>Customer didn't need to take survey before the tour held. <b>BELATOUR</b> will do it especially for you!</p>
								</div><!-- /.col-lg-4 -->
								<div class="col-lg-4" style="text-align: center">
									<img class="img-circle" src="<?php echo base_url() ?>/assets/images/files/portfolio/Ellipse-12.png" alt="Flexible Plan" width="140" height="140">
									<h3>Flexible Plan</h3>
									<p>With <b>BELATOUR</b>, customer can easily choose whatever the place, transportation, duration, and everything conveniently!</p>
								</div><!-- /.col-lg-4 -->
								<div class="col-lg-4" style="text-align: center">
									<img class="img-circle" src="<?php echo base_url() ?>/assets/images/files/portfolio/Ellipse-14.png" alt="Free Consultation 24/7" width="140" height="140">
									<h3>Free Consultation 24/7</h3>
									<p>No ideas where to go? You can ask our team to recommend the best choice for your tour absolutely for <b>FREE!</b></p>
								</div><!-- /.col-lg-4 -->
							</div><!-- /.row -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === Popular Packages =========== -->
				<div id="popular-packages" class="flat-section popular-packages">

					<div class="section-title">

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">

									<h2>Recommended Places to Go</h2>
									<p>Here are the best places to travel in 2021 for your study tour. Our list of the best study tours includes historic sites, modern museums and nature classes.</p>

								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-title end -->

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-12">

									<div class="popular-packages-slider">
										<ul class="owl-carousel">
											<?php $fmt = new NumberFormatter('id_ID', NumberFormatter::CURRENCY );
											foreach ($paket as $item) : ?>
											<li>
												<div class="slide">
													<div class="box-preview">
														<div class="box-img img-bg">
															<table width="100%" height="100%">
																<tr height="50%">
																	<td background="<?= base_url().'/images/wisata/'.$item['wisata'][0]['img_thumbnail'] ?>" style="background-size: cover; background-position: center;" width="50%"></td>
																	<td background="<?= base_url().'/images/wisata/'.$item['wisata'][1]['img_thumbnail'] ?>" style="background-size: cover; background-position: center;" width="50%"></td>
																</tr>
																<tr height="50%">
																	<td background="<?= base_url().'/images/wisata/'.$item['wisata'][2]['img_thumbnail'] ?>" style="background-size: cover; background-position: center;" width="50%"></td>
																	<td background="<?= base_url().'/images/wisata/'.$item['wisata'][3]['img_thumbnail'] ?>" style="background-size: cover; background-position: center;" width="50%"></td>
																</tr>
															</table>
														</div><!-- .box-img end -->
														<div class="box-content">
															<div class="rating">
																<?= formatDurasi($item['durasi']) ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>
															</div><!-- .rating end -->
															<h5><a href="<?php echo base_url('paket/#') ?>"><?= $item['nama_paket'] ?></a></h5>
															<ul>
																<?php foreach ($item['wisata'] as $list) : ?>
																<li><?= $list['nama_wisata'] ?></li>
																<?php endforeach; ?>
															</ul><!-- .list.check-square end -->
															<ul class="meta">
																<li><i class="fa fa-usd"></i><?= $fmt->formatCurrency($item['harga'], "IDR") ?></li>
																<li><i class="fa fa-group"></i><?= $item['kuota'] ?> Person</li>
															</ul><!-- .meta end -->
														</div><!-- .box-content end -->
													</div><!-- .box-preview end -->
												</div><!-- .slide end -->
											</li>
											<?php endforeach; ?>
										</ul>
									</div><!-- .popular-packages-slider end -->

								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === CTA Title 1 =========== -->
				<div class="parallax-section cta-title" data-parallax-bg-img="img-16.jpg" data-stellar-background-ratio="0.2">

					<div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.60"></div><!-- .overlay-colored end -->
					<div class="section-inner">

						<div class="container">
							<div class="row">
								<div class="section-content">

									<div class="col-md-8 col-md-offset-2">

										<h1 class="title-big">
											<span>Great Experiences</span>
											<br>
											<span class="colored">For Traveling and Tourism</span>
										</h1>
										<a class="btn colorful large hover-dark" href="#our-tours">Setup Your Tour</a>

									</div><!-- .col-md-8 end -->

								</div><!-- .section-content end -->

							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-inner end -->

				</div><!-- .parallax-section end -->

				<!-- === Our Tours =========== -->
				<div id="our-tours" class="flat-section our-tours" data-scroll-index="2">

					<div class="section-title">

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">

									<h2>Our Tours</h2>
									<p>Choose an existing tourist place, and customize your own school tour now. There are tourist attractions that we have categorized based on the type of tour.</p>

								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-title end -->

					<div class="portfolio-top"></div>
					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-12">
									
									<ul class="portfolio-categories">
										<li><a data-filter="*" class="active" href="#">All</a></li>
										<li><a data-filter=".pi-history-tour" href="#">Historical Places</a></li>
										<li><a data-filter=".pi-education-tour" href="#">Educational Places</a></li>
										<li><a data-filter=".pi-open-area" href="#">Open-Space Area</a></li>
										<li><a data-filter=".pi-playground-area" href="#">Playground Area</a></li>
									</ul>
								
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

						<div id="portfolio-single-wrap">

							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
							
											<div class="portfolio-single-loader">
												<div class="loader-shape la-ball-clip-rotate la-dark">
												    <div></div>
												</div>
											</div><!-- end portfolio-single-loader -->
											<div class="clearfix"></div>
											<div id="portfolio-single-content"></div>
							
									</div><!-- .col-md-12 end -->
								</div><!-- .row end -->
							</div><!-- .container-fluid end -->

						</div><!-- end portfolio-single-wrap -->

						<div class="portfolio-items-wrap">

							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
							
										<div class="portfolio-items">
											<?php foreach ($wisata as $item) : ?>
											<div class="portfolio-item pi-<?= $item['kategori'] ?>">
												<div class="preview img-bg">
													<img src="<?= base_url().'/images/wisata/'.$item['img_thumbnail'] ?>" alt="">
												</div><!-- .preview end -->
												<a class="overlay" href="#">
													<div class="overlay-inner">
														<h5><?= $item['nama_wisata'] ?></h5>
														<h5 class="sub-title"><?= $item['alamat'] ?></h5>
													</div><!-- .overlay-inner end -->
												</a><!-- .overlay end -->
											</div><!-- .portfolio-item -->
											<?php endforeach; ?>
									</div><!-- .col-md-12 end -->
								</div><!-- .row end -->
							</div><!-- .container-fluid end -->		

						</div><!-- .portfolio-items-wrap end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === About Us =========== -->
				<div id="about-us" class="flat-section about-us" data-scroll-index="3">

					<div class="section-title">

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">

									<h2>About Us</h2>
									<p><b>BELATOUR</b>, is here as a solution for booking tour packages in an easy and flexible way. With <b>BELATOUR</b>, traveling has become easier and also fun because the ordering process can be done in your hand!</p>

								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-title end -->

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="event-box" style="text-align: center; padding-bottom: 24px;">
										<img style="display: block; margin-left: auto; margin-right: auto; width: 50%; height: 400dp" src="<?php echo base_url() ?>/images/belatour.png"/>
										<h3>Belatour</h3>
										Bebas pilih bis, Bis nya ber AC, Free WiFi, Bisa nge cas HP + Lepi
									</div><!-- .event-box end -->
								</div><!-- .col-md-3 end -->
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="event-box" style="text-align: center; padding-bottom: 24px;">
										<img style="display: block; margin-left: auto; margin-right: auto; width: 68%; height: 700dp" src="<?php echo base_url() ?>/images/tourlain.png"/>
										<h3>Tour Lain</h3>
										Bis nya momgok, Tidak nyaman, Tidak sesuai ekspektasi
									</div><!-- .event-box end -->
								</div><!-- .col-md-3 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === Google Map =========== -->
				<div id="map"></div>

			</div><!-- #content-wrap -->

		</section><!-- #content end -->
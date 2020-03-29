<section class="hero-wrap js-fullheight">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
					<div class="text text-center">
						<span class="subheading"><?= preloz("hlavicka.ahoj");?></span>
						<h1><?= $celeJmeno;?></h1>
						<h2><?= preloz("hlavicka.ja_jsem");?>
							<span class="txt-rotate" data-period="2000"
								data-rotate='[<?= vypisJaJsem($schopnosti);?>]'></span>
						</h2>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="mouse">
			<a href="#about-section" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			</a>
		</div>
	</section>

	<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb goto-here" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-6 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center"
							style="background-image:url(images/about.jpg);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4"><?= preloz("domu.o_mne.nadpis");?></h2>
							<p><?= preloz("domu.o_mne.popis");?></p>
							<ul class="about-info mt-4 px-md-0 px-2">
								<li class="d-flex"><span><?= preloz("domu.o_mne.jmeno");?>:</span> <span><?= $celeJmeno;?></span></li>
								<li class="d-flex"><span><?= preloz("domu.o_mne.datum_narozeni");?>:</span> <span><?= $datumNarozeni;?></span></li>
								<li class="d-flex"><span><?= preloz("domu.o_mne.adresa");?>:</span> <span><?= $adresa;?></span></li>
								<li class="d-flex"><span><?= preloz("domu.o_mne.email");?>:</span> <span><?= $email;?></span></li>
								<li class="d-flex"><span><?= preloz("domu.o_mne.telefon");?>: </span> <span><?= $telefon;?></span></li>
							</ul>
						</div>
					</div>
					<div class="counter-wrap ftco-animate d-flex mt-md-3">
						<div class="text">
							<p class="mb-4">
								<span class="number" data-number="120">0</span>
								<span>Project complete</span>
							</p>
							<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb" id="resume-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<nav id="navi">
						<ul>
							<li><a href="#page-1"><?= preloz("domu.souhrn.vzdelani");?></a></li>
							<li><a href="#page-2"><?= preloz("domu.souhrn.zkusenosti");?></a></li>
							<li><a href="#page-3"><?= preloz("domu.souhrn.schopnosti");?></a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-9">
					<div id="page-1" class="page one">
						<h2 class="heading"><?= preloz("domu.souhrn.vzdelani");?></h2>
						<?php
						foreach ($vzdelani as $skola) {
							?>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-ideas"></span>
								</div>
								<div class="text pl-3">
									<span class="date"><?= $skola["roky"];?></span>
									<h2><?= $skola["obor"];?></h2>
									<span class="position"><?= $skola["skola"];?></span>
								</div>
							</div>
						<?php
						}
						?>
					</div>

					<div id="page-2" class="page two">
						<h2 class="heading"><?= preloz("domu.souhrn.zkusenosti");?></h2>

						<?php
						foreach ($zamestnani as $prace) {
							?>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-ideas"></span>
								</div>
								<div class="text pl-3">
									<span class="date"><?= $prace["roky"];?></span>
									<h2><?= $prace["pozice"];?></h2>
									<span class="position"><?= $prace["zamestnavatel"];?></span>
									<p><?= $prace["popis"];?></p>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<div id="page-3" class="page three">
						<h2 class="heading"><?= preloz("domu.souhrn.schopnosti");?></h2>
						<div class="row progress-circle mb-5">
						<?php
						foreach ($hlavniSchopnosti as $hlavniSchopnost) {
							?>
							<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
									<h2 class="h5 font-weight-bold text-center mb-4"><?= $hlavniSchopnost["schopnost"];?></h2>

									<!-- Progress bar 1 -->
									<div class="progress mx-auto" data-value='<?= $hlavniSchopnost["procenta"];?>'>
										<span class="progress-left">
											<span class="progress-bar border-primary"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar border-primary"></span>
										</span>
										<div
											class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
											<div class="h2 font-weight-bold"><?= $hlavniSchopnost["procenta"];?><sup class="small">%</sup></div>
										</div>
									</div>
									<!-- END -->
								</div>
							</div>
							<?php
							}
							?>
						</div>
						<div class="row">
							<?php
								foreach ($vedlejsiSchopnosti as $vedlejsiSchopnost) {
									?>
									<div class="col-md-6 animate-box">
										<div class="progress-wrap ftco-animate">
											<h3><?= $vedlejsiSchopnost["schopnost"];?></h3>
											<div class="progress">
												<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?= $vedlejsiSchopnost["procenta"];?>"
													aria-valuemin="0" aria-valuemax="100" style="width:<?= $vedlejsiSchopnost["procenta"];?>%">
													<span><?= $vedlejsiSchopnost["procenta"];?>%</span>
												</div>
											</div>
										</div>
									</div>
								
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4"><?= preloz("domu.sluzby.nadpis");?></h2>
					<p><?= preloz("domu.sluzby.popis");?></p>
				</div>
			</div>
			<div class="row">
				<?php
					foreach ($sluzby as $sluzba) {
				?>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<div class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-analysis"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5"><?= $sluzba["sluzba"]; ?></h3>
							<p><?= $sluzba["popis"]; ?></p>
						</div>
					</div>
				</div>
					
				<?php
				}
				?>
			</div>
		</div>
	</section>
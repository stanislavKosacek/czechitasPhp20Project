<?php
require "bootstrap.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
require 'layout/head.php';
?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<?php
	require 'layout/header.php';
	?>
	<section class="hero-wrap js-fullheight">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
					<div class="text text-center">
						<span class="subheading">Hey! I am</span>
						<h1><? echo $celeJmeno; ?></h1>
						<h2>I'm a
							<span class="txt-rotate" data-period="2000"
								data-rotate='[<? echo vypisJaJsem($schopnosti); ?>]'></span>
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
							<h1 class="big">About</h1>
							<h2 class="mb-4">About Me</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
							<ul class="about-info mt-4 px-md-0 px-2">
								<li class="d-flex"><span>Name:</span> <span><? echo $celeJmeno; ?></span></li>
								<li class="d-flex"><span>Date of birth:</span> <span><? echo $datumNarozeni; ?></span></li>
								<li class="d-flex"><span>Address:</span> <span><? echo $adresa; ?></span></li>
								<li class="d-flex"><span>Email:</span> <span><? echo $email; ?></span></li>
								<li class="d-flex"><span>Phone: </span> <span><? echo $telefon; ?></span></li>
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
							<li><a href="#page-1">Education</a></li>
							<li><a href="#page-2">Experience</a></li>
							<li><a href="#page-3">Skills</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-9">
					<div id="page-1" class="page one">
						<h2 class="heading">Education</h2>
						<?php
						foreach ($vzdelani as $skola) {
							?>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-ideas"></span>
								</div>
								<div class="text pl-3">
									<span class="date"><? echo $skola["roky"];?></span>
									<h2><? echo $skola["obor"];?></h2>
									<span class="position"><? echo $skola["skola"];?></span>
								</div>
							</div>
						<?php
						}
						?>
					</div>

					<div id="page-2" class="page two">
						<h2 class="heading">Experience</h2>

						<?php
						foreach ($zamestnani as $prace) {
							?>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-ideas"></span>
								</div>
								<div class="text pl-3">
									<span class="date"><? echo $prace["roky"];?></span>
									<h2><? echo $prace["pozice"];?></h2>
									<span class="position"><? echo $prace["zamestnavatel"];?></span>
									<p><? echo $prace["popis"];?></p>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<div id="page-3" class="page three">
						<h2 class="heading">Skills</h2>
						<div class="row progress-circle mb-5">
						<?php
						foreach ($hlavniSchopnosti as $hlavniSchopnost) {
							?>
							<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
									<h2 class="h5 font-weight-bold text-center mb-4"><? echo $hlavniSchopnost["schopnost"];?></h2>

									<!-- Progress bar 1 -->
									<div class="progress mx-auto" data-value='<? echo $hlavniSchopnost["procenta"];?>'>
										<span class="progress-left">
											<span class="progress-bar border-primary"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar border-primary"></span>
										</span>
										<div
											class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
											<div class="h2 font-weight-bold"><? echo $hlavniSchopnost["procenta"];?><sup class="small">%</sup></div>
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
											<h3><? echo $vedlejsiSchopnost["schopnost"];?></h3>
											<div class="progress">
												<div class="progress-bar color-1" role="progressbar" aria-valuenow="<? echo $vedlejsiSchopnost["procenta"];?>"
													aria-valuemin="0" aria-valuemax="100" style="width:<? echo $vedlejsiSchopnost["procenta"];?>%">
													<span><? echo $vedlejsiSchopnost["procenta"];?>%</span>
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
					<h1 class="big big-2">Services</h1>
					<h2 class="mb-4">Services</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
							<h3 class="mb-5"><?echo $sluzba["sluzba"]; ?></h3>
							<p><?echo $sluzba["popis"]; ?></p>
						</div>
					</div>
				</div>
					
				<?php
				}
				?>
			</div>
		</div>
	</section>

	<?php
	require 'layout/footer.php';
	?>
	<?php
	require 'layout/javascript.php';
	?>

</body>

</html>
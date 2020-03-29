<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading"><?= preloz("hlavicka.ahoj");?></span>
                    <h1>
                        <?= $celeJmeno; ?>
                    </h1>
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-section" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
					<h2 class="mb-4">My Blog</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">


				<?php
                    foreach ($clanky as $clanek) {
                        echo vypisNahledClanku($clanek);
                    }
					?>
			</div>
		</div>
	</section>
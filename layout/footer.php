<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?= preloz("paticka.o_mne");?></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2"><?= preloz("paticka.odkazy");?></h2>
                    <div id="ftco-nav">
                        <ul class="list-unstyled">
                            <?= sestavVedlejsiMenu($menu, $controllerNazev);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?= preloz("paticka.sluzby");?></h2>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($sluzby as $sluzba) {
                            ?>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>
                                <?= $sluzba["sluzba"]; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?= preloz("paticka.mate_otazku");?></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">
                                    <?= $adresa; ?></span></li>
                            <li><a href="tel:<?= $telefon; ?>"><span class="icon icon-phone"></span><span
                                        class="text">
                                        <?= $telefon; ?></span></a></li>
                            <li><a href="mailto:<?= $email; ?>"><span class="icon icon-envelope"></span><span
                                        class="text">
                                        <?= $email; ?></span></a></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    2019 All rights reserved | This template
                    is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg>
</div>
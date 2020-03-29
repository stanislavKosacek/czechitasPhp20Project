<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?= vypisLogo($jmeno)?></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <?= sestavHlavniMenu($menu, $controllerNazev);?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $povoleneJazyky[$jazyk]; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            foreach ($povoleneJazyky as $key => $jazyk) {
                                echo '<a class="dropdown-item" href="?stranka=jazyk&jazyk=' . $key . '&presmerovani=' . $controllerNazev . '" class="nav-link">' . $jazyk . '</a>';
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php


$idClanku = $_GET['id'] ?? null;
if ($idClanku) {
    $template = "blog-detail";
   
    $dotaz = $pdo->prepare("SELECT * FROM clanky WHERE id = :idClanku");
    $dotaz->execute(['idClanku' => $idClanku]);
    $clanek = $dotaz->fetch(PDO::FETCH_ASSOC);
} else {
    $template = 'blog';

    $dotaz = $pdo->prepare("SELECT * FROM clanky");
    $dotaz->execute();
    $clanky = $dotaz->fetchAll(PDO::FETCH_ASSOC);
}



function vypisNahledClanku(array $clanek): string
{
    $datum = (new DateTime($clanek["pridano"]))->format("j. n. Y H:i");
    $obrazek = $clanek["obrazek"] ?? "image1.jpg";
    $html = '
    <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
        <div class="blog-entry justify-content-end">
            <a href="?stranka=blog&id=' . $clanek["id"] . '" class="block-20" style="background-image: url(\'images/blog/' . $obrazek . '\');">
            </a>
            <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="?stranka=blog&id=' . $clanek["id"] . '">' . $clanek["nazev"] . '</a>
                </h3>
                <div class="d-flex align-items-center mb-3 meta">
                    <p class="mb-0">
                        <span class="mr-2">' . $datum . '</span>
                <a href="?stranka=blog&id=' . $clanek["id"] . '" class="mr-2">' . $clanek["autor"] . '</a>
                </p>
                </div>
                <p>' . $clanek["perex"] . '</p>
            </div>
        </div>
    </div>';

    return $html;
}

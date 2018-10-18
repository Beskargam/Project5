<?php
$title = htmlspecialchars('Arcturus Morea Home');

ob_start(); ?>
    <section>
        <div class="container flipboard-boxes">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-body" src="Public/Images/arcturus-body.png">
                </div>
                <div class="col-lg-7 align-text-center">
                    <h1 class="neon">ARCTURUS <br>MOREA <br>TRANSPORT <br>INTERGALACTIC</h1><br>
                    <h2 class="neon">Vos colis entre de bonnes ailes</h2>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row title-home">
                <div class="col-sm-8 col-md-6 col-lg-5 title-home-text">
                    DERNIERS COMM-LINKS /
                </div>
                <div class="col-sm col-md col-lg-5">

                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 title-home-btn">
                    <a class="title-home-link" href="index.php?action=newsList">Voir tout</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 flipboard-boxes flipboard-latest-news">
                    <div class="row justify-content-center">
                        <?php
                        foreach ($newsHome as $news) { ?>
                            <div class="col-lg-4 card-latestnews">
                                <div class="card-latestnews-body">

                                    <div id="upper_left-news"></div>
                                    <div id="upper_right-news"></div>
                                    <div id="lower_left-news"></div>
                                    <div id="lower_right-news"></div>

                                    <h4 class="card-latestnews-subtitle">TYPE / <span class="type-group">TRANSMISSION /</span></h4>
                                    <h3 class="card-latestnews-title"><?php echo htmlspecialchars($news->title()); ?></h3>
                                    <p class="card-latestnews-text">
                                        <?php echo '<a class="card-link" href="index.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '">>>> Lire</a>'; ?>
                                    </p>
                                </div>
                                <div class="card-latestnews-footer">
                                    <?php
                                    echo htmlspecialchars($news->rank_user()) . ' ';
                                    echo htmlspecialchars($news->pseudo_user()); ?><br>
                                    <?php echo htmlspecialchars($news->dateAdd_news()->format('d F, Y')); ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();

//require('View\Layout\layoutHome.php');
if (empty($pageLayoutHomeHome)) {
    $pageLayoutHome = 'layoutHome';
    $pageLayoutHome = trim($pageLayoutHome . '.php');
}
$pageLayoutHome = str_replace('../', 'protect', $pageLayoutHome);
$pageLayoutHome = str_replace('..\\', 'protect', $pageLayoutHome);
$pageLayoutHome = str_replace(';', 'protect', $pageLayoutHome);
$pageLayoutHome = str_replace('%', 'protect', $pageLayoutHome);
if (preg_match('/admin/', $pageLayoutHome)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageLayoutHome = 'View/Layout/' . $pageLayoutHome;
    if (file_exists($pageLayoutHome) && $pageLayoutHome != 'index.php') {
        require($pageLayoutHome);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
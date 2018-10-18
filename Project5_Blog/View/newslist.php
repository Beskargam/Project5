<?php
$title = htmlspecialchars('COMM-LINKS');

ob_start(); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title-home-text">
                    <img src="Public/Images/title-icon2.png">
                    COMM-LINKS /
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 flipboard-boxes flipboard-list-news">
                    <div class="row justify-content-center">
                        <?php
                        foreach ($newsList as $news) { ?>
                            <div class="col-lg-4 card-newslist">
                                <div class="card-newslist-body">

                                    <div id="upper_left-news"></div>
                                    <div id="upper_right-news"></div>
                                    <div id="lower_left-news"></div>
                                    <div id="lower_right-news"></div>

                                    <h4 class="card-newslist-subtitle">TYPE / <span class="type-group">TRANSMISSION /</span></h4>
                                    <h3 class="card-newslist-title"><?php echo htmlspecialchars($news->title()); ?></h3>
                                    <p class="card-newslist-text">
                                        <?php echo '<a class="card-link" href="index.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '">>>> Lire</a>'; ?>
                                    </p>
                                </div>
                                <div class="card-newslist-footer">
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

//require('View\Layout\layout.php');
if (empty($pageLayout)) {
    $pageLayout = 'layout';
    $pageLayout = trim($pageLayout . '.php');
}
$pageLayout = str_replace('../', 'protect', $pageLayout);
$pageLayout = str_replace('..\\', 'protect', $pageLayout);
$pageLayout = str_replace(';', 'protect', $pageLayout);
$pageLayout = str_replace('%', 'protect', $pageLayout);
if (preg_match('/admin/', $pageLayout)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageLayout = 'View/Layout/' . $pageLayout;
    if (file_exists($pageLayout) && $pageLayout != 'index.php') {
        require($pageLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

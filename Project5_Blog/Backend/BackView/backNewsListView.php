<?php
$title = htmlspecialchars('Liste des News');

ob_start(); ?>
    <section class="newsList">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-5 title-home-text">
                    COMM-LINKS /
                </div>
                <div class="col-sm col-md col-lg-5">

                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 title-home-btn">
                    <a href="backIndex.php?action=addNews">Ajouter une News</a>
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

                                    <h4 class="card-newslist-subtitle">TYPE / <span
                                                class="type-group">TRANSMISSION /</span></h4>
                                    <h3 class="card-newslist-title"><?php echo htmlspecialchars($news->title()); ?></h3>
                                    <p class="card-newslist-text">
                                        <?php echo '<a href="backIndex.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '">Voir le COMM-LINK</a>'; ?>
                                    <form action="backIndex.php?action=newsList" method="POST">
                                        <?php echo '<input type="hidden" name="id" value="' . htmlspecialchars($news->id_news()) . '">'; ?>
                                        <button class="btn btn-primary" type="submit" name="deleteNews" value="delete">
                                            Supprimer
                                        </button>
                                        <?php echo '<a href="backIndex.php?action=editNews&amp;id=' . htmlspecialchars($news->id_news()) . '">Editer</a>'; ?>
                                    </form>
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

        <?php
        foreach ($newsList as $news) { ?>
            <p>
            </p> <?php
        } ?>
    </section>
<?php $content = ob_get_clean();

//require('backView\backLayout\backLayout.php');
if (empty($pageBackLayout)) {
    $pageBackLayout = 'backLayout';
    $pageBackLayout = trim($pageBackLayout . '.php');
}
$pageBackLayout = str_replace('../', 'protect', $pageBackLayout);
$pageBackLayout = str_replace('..\\', 'protect', $pageBackLayout);
$pageBackLayout = str_replace(';', 'protect', $pageBackLayout);
$pageBackLayout = str_replace('%', 'protect', $pageBackLayout);
if (preg_match('/admin/', $pageBackLayout)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackLayout = 'backView/backLayout/' . $pageBackLayout;
    if (file_exists($pageBackLayout) && $pageBackLayout != 'backIndex.php') {
        require($pageBackLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

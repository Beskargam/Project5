<?php
$title = htmlspecialchars($news->title());
?>

<?php ob_start(); ?>
    <div class="container flipboard-title-bar ">
        <div class="row">
            <div class="col-6 col-sm-6 title ">
                <div class="row">
                    <div class="d-none d-md-block col-2 titlebar-icone ">
                        <img src="BackPublic/Images/title-icon2.png">
                    </div>
                    <div class="col-10 ">
                        <div class="titlebar-title">
                            TRANSMISSION
                        </div>
                        <div class="titlebar-author">
                            <?php echo htmlspecialchars($news->pseudo_user()) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 details ">
                <div class="row">
                    <div class="col-sm-12 details-background ">
                        <div class="row">
                            <div class="col-lg-2 ">
                                <div class="titlebar-details-title ">
                                    ID:
                                    <span class="titlebar-details">
                        <?php echo htmlspecialchars($news->id_news()); ?>
                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 ">
                                <div class="titlebar-details-title ">
                                    DATE:
                                    <span class="titlebar-details">
                        <?php echo htmlspecialchars($news->dateAdd_news()->format('d F')); ?>
                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 ">
                                <?php if ($news->dateAdd_news() != $news->dateEdit_news()) { ?>
                                    <div class="titlebar-details-title ">
                                        MAJ:
                                        <span class="titlebar-details">
                            <?php echo htmlspecialchars($news->dateEdit_news()->format('d F')); ?>
                        </span>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <h1 class="neon"><?php echo htmlspecialchars($news->title()) ?></h1>
        <?php echo htmlspecialchars($news->dateAdd_news()->format('d F, Y')); ?>
    </div>
    <div class="lightbar top-lightbar"></div>
    <div class="lightbarlights"></div>
    <div class="container">
        <section>
            <div class="container flipboard-boxes flipboard-newsintro">
                <div class="row">
                    <div class="col-lg-12 card-newsintro">
                        <div class="card-newsintro-body">

                            <div id="upper_left-news"></div>
                            <div id="upper_right-news"></div>
                            <div id="lower_left-news"></div>
                            <div id="lower_right-news"></div>

                            <p class="card-newsintro-text">
                                <?php echo htmlspecialchars($news->intro()) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-news">
                <?php echo htmlspecialchars($news->title()) ?>
            </div>
            <div class="container flipboard-boxes flipboard-news">
                <div class="row">
                    <div class="col-lg-12 card-news">
                        <div class="card-news-body">

                            <div id="upper_left-news"></div>
                            <div id="upper_right-news"></div>
                            <div id="lower_left-news"></div>
                            <div id="lower_right-news"></div>

                            <h3 class="card-news-title"></h3>
                            <p class="card-news-text">
                                <?php echo htmlspecialchars($news->content_news()); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="two-line-separator"></div>
        <div class="title-news">
            <img src="BackPublic/Images/title-icon2.png">
            RETOURS
        </div>
        <section class="comments">
            <?php
            foreach ($commentsList as $comment) { ?>
                <div class="container flipboard-boxes flipboard-comment">
                    <div class="row">
                        <div class="col-lg-12 card-comment">
                            <div class="card-comment-body">

                                <div class="card-comment-header">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h4 class="comment-pseudo"><?php echo htmlspecialchars($comment->rank_user()); ?>
                                                /
                                                <span class="comment-name"><?php echo htmlspecialchars($comment->pseudo()); ?>
                                                    /</span>
                                            </h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="date-comment">
                                                <?php
                                                if ($comment->dateAdd_comment() != $comment->dateEdit_comment()) {
                                                    ?> [MAJ] <?php echo htmlspecialchars($comment->dateEdit_comment()->format('d F, Y H:i')) ?>
                                                <?php } else {
                                                    echo htmlspecialchars($comment->dateAdd_comment()->format('d F, Y H:i'));
                                                } ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-comment-text">
                                    <?php echo nl2br(htmlspecialchars($comment->content_comment())); ?>
                                </p>
                                <div class="card-comment-footer">
                                    <?php echo '<form action="backIndex.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '"
                                          method="POST">
                                        <input type="hidden" name="id" value="' . htmlspecialchars($comment->id_comment()) . '">'; ?>
                                    <button class="btn btn-primary" type="submit" name="deleteComment" value="delete">
                                        Supprimer
                                    </button>
                                    <?php echo '<a href="backIndex.php?action=editComment&amp;id=' . htmlspecialchars($comment->id_comment()) . '">Editer</a>'; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
        <div class="two-line-separator"></div>
    </div>
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

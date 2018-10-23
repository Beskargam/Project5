<?php
$title = htmlspecialchars('Validation des Commentaires');
?>

<?php ob_start(); ?>
    <section class="comments">
        <div class="container">
            <div class="col-lg-12 flipboard-boxes flipboard-latest-news">
                <div class="row justify-content-center">
                    <div class="card-comment-validation">
                        <img class="card-img" src="BackPublic/Images/Source.jpg" alt="Card-image">
                        <div class="card-latestnews-body card-img-overlay">

                            <div id="upper_left-corner"></div>
                            <div id="upper_right-corner"></div>
                            <div id="lower_left-corner"></div>
                            <div id="lower_right-corner"></div>

                            <h4 class="card-latestnews-subtitle">TYPE / <span class="type-group">VALIDATION /</span></h4>
                            <h3 class="card-latestnews-title">VALIDATION DES COMMENTAIRES</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="two-line-separator"></div>
        <?php
        foreach ($commentsValidationList as $comment) { ?>
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
                                <form action="backIndex.php?action=commentsValidationList" method="POST">
                                    <?php
                                    echo '<input type="hidden" name="id" value="' .htmlspecialchars($comment->id_comment()). '">'
                                    ?>
                                    <button class="btn btn-primary" type="submit" name="validateComment" value="validate">Valider le commentaire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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
    $pageBackLayout = 'BackView/backLayout/' . $pageBackLayout;
    if (file_exists($pageBackLayout) && $pageBackLayout != 'backIndex.php') {
        require($pageBackLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

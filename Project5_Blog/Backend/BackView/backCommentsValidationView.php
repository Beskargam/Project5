<?php
$title = htmlspecialchars('Validation des Commentaires');
?>

<?php ob_start(); ?>
    <section class="comments">
        <?php
        foreach ($commentsValidationList as $comment) { ?>
            <hr>
            <h4> <?php
                echo htmlspecialchars($comment->rank_user()) ?><br><?php
                echo htmlspecialchars($comment->pseudo()) ?><br>
            </h4>
            <p><?php
                echo nl2br(htmlspecialchars($comment->content_comment()))
                ?></p>
            <h4>Posté le <em><?php echo htmlspecialchars($comment->dateAdd_comment()->format('d-m-Y H:i')) ?></em>
                <?php
                if ($comment->dateAdd_comment() != $comment->dateEdit_comment()) {
                    ?> - Modifié le
                    <em><?php echo htmlspecialchars($comment->dateEdit_comment()->format('d-m-Y H:i')) ?></em><?php
                } ?>
            </h4>
            <form action="backIndex.php?action=commentsValidationList" method="POST">
                <?php
                echo '<input type="hidden" name="id" value="' .htmlspecialchars($comment->id_comment()). '">'
                ?>
                <button type="submit" name="validateComment" value="validate">Valider le commentaire</button>
            </form>
            <hr><?php
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
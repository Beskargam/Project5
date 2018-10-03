<?php
$title = htmlspecialchars('Nous contacter');

ob_start(); ?>
    <section class="contact">
        <div>
            <?php
            if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank']) AND isset($_SESSION['rank_id'])) { ?>
                <form action="index.php?action=contact" method="POST">
                    <p>
                        <?php echo 'Nom : ' . $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . ' '; ?><br>
                        <label for="emailContact">Votre Email : </label><input type="text" name="emailContact"
                                                                               id="emailContact"
                                                                               required><br>
                        <label for="subjectContact">Sujet : </label><input type="text" name="subjectContact"
                                                                               id="subjectContact"
                                                                               required><br>
                        <label for="messageContact">Votre message</label><textarea name="messageContact"
                                                                                   id="messageContact"
                                                                                   required></textarea><br>
                        <input type="submit" value="Envoyer">
                    </p>
                </form>
                <?php
            } else {
                echo 'Si vous souhaitez nous envoyer un message il faut vous inscrire ou vous connecter';
            }
            ?>
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
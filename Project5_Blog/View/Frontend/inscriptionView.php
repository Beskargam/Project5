<?php
$title = htmlspecialchars('Inscription');
?>

<?php ob_start(); ?>
    <section>
        <p><a href="index.php?action=home">Retour à la liste des billets</a></p>
        <form action="index.php?action=inscription" method="post">
            <p>
                <label for="pseudoInscription">Votre Pseudo : </label> <input type="text" name="pseudoInscription"
                                                                              id="pseudoInscription" required/>
                <label for="passwordInscription">Votre mot de passe : </label> <input type="password"
                                                                                      name="passwordInscription"
                                                                                      required>
                <label for="passwordInscription">Confirmez votre mot de passe : </label> <input type="password"
                                                                                                name="passwordInscription"
                                                                                                required>
                <input type="submit" value="Valider">
            </p>
        </form>
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
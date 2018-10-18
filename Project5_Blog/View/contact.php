<?php
$title = htmlspecialchars('Nous contacter');

ob_start(); ?>
    <section>
        <div class="container flipboard-boxes flipboard-contact">
            <div class="row">
                <?php
                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank']) AND isset($_SESSION['rank_id'])) { ?>
                    <div class="col-lg-12 card-contact">
                        <div class="card-contact-body">

                            <div id="upper_left-corner"></div>
                            <div id="upper_right-corner"></div>
                            <div id="lower_left-corner"></div>
                            <div id="lower_right-corner"></div>

                            <h4 class="card-contact-subtitle">TYPE / <span class="type-group">CONTACT /</span></h4>
                            <h3 class="card-contact-title"><?php echo 'Nom : ' . $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . ' '; ?></h3>
                            <p class="card-contact-text">
                            <form id="contactForm" method="POST">
                                <div class="has-error">
                                    <label class="card-contact-text" for="emailContact">Votre adresse mail
                                        : </label><input type="email"
                                                         class="form-control"
                                                         name="email"
                                                         id="email">
                                </div>
                                <div class="has-error">
                                    <label class="form-label card-contact-text" for="subjectContact">Sujet
                                        : </label><input type="text"
                                                         class="form-control"
                                                         name="subjectContact"
                                                         id="subjectContact">
                                </div>
                                <div class="has-error">
                                    <label class="form-label card-contact-text" for="messageContact">Votre
                                        message</label><textarea
                                            class="form-control" name="messageContact"
                                            id="messageContact"></textarea>
                                </div>
                                <div class="has-error">
                                    <button type="submit" class="btn btn-primary contact-submit" value="Envoyer">Envoyer</button>
                                    <span id="contact-success"><span class="oi oi-check"></span> Succès, votre message envoyé</span>
                            </form>
                            </p>
                        </div>
                    </div>
                    <?php
                } else { ?>
                    <div class="col-lg-12 card-contact">
                        <div class="card-contact-body">

                            <div id="upper_left-corner"></div>
                            <div id="upper_right-corner"></div>
                            <div id="lower_left-corner"></div>
                            <div id="lower_right-corner"></div>

                            <h4 class="card-contact-subtitle">TYPE / <span class="type-group">MESSAGE /</span></h4>
                            <h3 class="card-contact-title">Communication impossible</h3>
                            <p class="card-contact-text">
                                Si vous souhaitez nous envoyer un message il faut vous inscrire ou vous connecter
                            </p>
                        </div>
                    </div>
                <?php }
                ?>
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

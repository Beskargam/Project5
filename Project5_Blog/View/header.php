<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <header class="">
        <div class="row top-head">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <a class="" href="index.php?action=home"><img src="Public/Images/logo.png" width="171"
                                                              height="80" alt=""></a>
            </div>
            <div class="col-sm col-md col-lg-5">

            </div>
            <div class="col-sm-8 col-md-6 col-lg-5">
                <?php
                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank']) AND isset($_SESSION['rank_id'])) { ?>
                    <div class="head-text form-connexion">
                        <?php echo $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . ' '; ?><br>
                        <a class="logout-link" href="Model\logout.php">| DECONNEXION</a>
                    </div>
                <?php } else { ?>
                    <div class="form-connexion">
                        <form id="connexionForm" method="post">
                            <div class="input-group has-error">
                                <input type="text" class="form-control" name="username" placeholder="Pseudo" id="username">
                                <input type="password" class="form-control" name="password"
                                       placeholder="Mot de passe"
                                       id="password">
                                <div class="input-group-append">
                                    <button type="submit" value="Connexion" class="btn btn-primary connexion-submit">CONNEXION
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="inscription-link">
                            <span class="oi oi-arrow-circle-right icon-blue"></span>
                            <a href="index.php?action=inscription">Inscription</a>
                            <span id="connexion-success"><span class="oi oi-check"></span> Succès</span>
                            <span id="connexion-failed"><span class="oi oi-x"></span> Echec</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php
                if (!isset($_GET['action']) OR isset($_GET['action']) AND $_GET['action'] == '' OR isset($_GET['action']) AND $_GET['action'] == 'home') {

                    echo '<img src="Public/Images/head.jpg" class="img-fluid">';
                }
                ?>
            </div>
        </div>
    </header>
<?php $header = ob_get_clean();

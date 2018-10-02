<?php ob_start(); ?>
    <header>
        <div>
            <h1>Zone d'Administration</h1>
            <a href="backIndex.php?action=home">Home</a>
            <a href="backModel\backLogout.php">Déconnexion</a>
        </div>
    </header>
<?php $header = ob_get_clean();
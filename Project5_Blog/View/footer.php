<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <footer>
        <div>
            <hr>
            <a href="https://www.facebook.com/arcturus.morea.3">Facebook</a><br>
            <a href="https://twitter.com/ArcturusMorea?lang=fr">Twitter</a><br>
            <?php
            if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank']) AND isset($_SESSION['rank_id']) AND $_SESSION['rank_id'] < 3) {
                echo '<a href="Backend\backIndex.php">Zone Administrative</a>';
            } ?>
        </div>
    </footer>
<?php $footer = ob_get_clean();

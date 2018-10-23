<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <footer class="footer-text">
        <div class="row justify-content-center">
            <div class="footer-col">
                <div class="footer-title">
                    <a class="footer-logo" href="index.php?action=home"><img src="Public/Images/logo.png" width="64"
                                                                             height="30" alt=""></a>|
                    <span class="footer-title-text">NAVIGATION</span>
                </div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><a class="footer-link" href="index.php?action=home">HOME</a>
                    </li>
                    <li class="footer-nav-item"><a class="footer-link"
                                                   href="index.php?action=newslist">COMM-LINK</a>
                    </li>
                    <li class="footer-nav-item"><a class="footer-link" href="index.php?action=contact">CONTACTS</a>
                    </li>
                    <li class="footer-nav-item"><a class="footer-link" href="Public/Files/WomenAtWork.pdf">CV
                            (PDF)</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="footer-title">
                    <a class="footer-logo" href="index.php?action=home"><img src="Public/Images/logo.png" width="64"
                                                                             height="30" alt=""></a>|
                    <span class="footer-title-text">MEDIAS</span>
                </div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><a class="footer-link"
                                                   href="https://www.facebook.com/arcturus.morea.3">FACEBOOK</a>
                    </li>
                    <li class="footer-nav-item"><a class="footer-link"
                                                   href="https://twitter.com/ArcturusMorea?lang=fr">TWITTER</a>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank']) AND isset($_SESSION['rank_id']) AND $_SESSION['rank_id'] < 3) {
                echo '
            <div class="footer-col">
                    <div class="footer-title">
                    <a class="footer-logo" href="index.php?action=home"><img src="Public/Images/logo.png" width="64"
                                                                             height="30" alt=""></a>|
                    <span class="footer-title-text">ADMINISTRATION</span>
                    </div>
                    <ul class="footer-nav">
                    <li class="footer-nav-item"><a class="footer-link" href="Backend\backIndex.php">ZONE SECURISEE</a></li>
                </ul>
            </div>';
            } ?>
        </div>
    </footer>
    <footer class="bottom-footer">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                @ 2018 Arcturus Morea Transport Intergalactic Corp.
            </div>
        </div>
    </footer>
<?php $footer = ob_get_clean();

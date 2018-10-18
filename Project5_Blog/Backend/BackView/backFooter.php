<?php
if (!isset($_SESSION)) {
    session_start();
}

ob_start(); ?>
    <footer class="footer-text">
        <div class="row justify-content-center">
            <div class="footer-col">
                <div class="footer-title">
                    <a class="footer-logo" href="index.php?action=home"><img src="BackPublic/Images/logo.png" width="64"
                                                                             height="30" alt=""></a>|
                    <span class="footer-title-text">NAVIGATION</span>
                </div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><a class="footer-link" href="backIndex">HOME</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <footer class="bottom-footer">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                @ 2018 Arcturus Morea Transport Intergalactic Corp.
            </div>
        </div>
    </footer>
    <footer>
<?php $footer = ob_get_clean();

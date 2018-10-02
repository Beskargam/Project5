<?php
$title = htmlspecialchars('Liste des Membres');

ob_start(); ?>
    <section class="usersList">
        <p>Voici la liste des membres : </p>
        <table>
            <tr>
                <th>Rang</th>
                <th>Nom</th>
            </tr>
            <?php
            foreach ($usersList as $users) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($users->rank()) . ' '; ?></td>
                    <td><?php echo htmlspecialchars($users->pseudo()); ?></td>
                </tr>
            <?php } ?>
        </table>
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
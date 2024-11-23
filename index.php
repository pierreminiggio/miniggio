<?php

$currentFolder = __DIR__ . DIRECTORY_SEPARATOR;

$domains = require_once $currentFolder . 'domains.php';
$currentDomain = $_SERVER['HTTP_HOST'];

$listDomain = 'domains.ggio.fr';

?><?php echo count($domains); ?> noms de domaine réservés par <a href="https://miniggiodev.fr" target="blank">Pierre</a> :
<ul>
    <?php foreach ($domains as $domain): ?>
        <li><a
            href="https://<?php echo $domain ?>"
            <?php if (strpos($_SERVER['HTTP_HOST'], $domain) !== false): ?>
                style="font-weight: bold;"
            <?php endif; ?>
        ><?php echo $domain ?></a></li>
    <?php endforeach; ?>
</ul>

<?php if ($currentDomain !== $listDomain) {
    echo '<br>Liste aussi disponible sur <a href="https://' . $listDomain . '">' . $listDomain . '</a>';
} ?>

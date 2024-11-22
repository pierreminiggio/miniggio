<?php

$domains = [
    'apprendrephp.fr',
    'baritone.fr',
    'copypasta.fr',
    'ggio.be',
    'ggio.dev',
    'ggio.fr',
    'ggio.link',
    'ggio.org',
    'ggio.space',
    'gitgud.fr',
    'jesuisboosted.com',
    'jesuisboosted.fr',
    'miniggio.be',
    'miniggio.de',
    'miniggio.dev',
    'miniggio.fr',
    'miniggio.org',
    'miniggio.uno',
    'miniggiodev.fr',
    'pierre.uno',
    'pierre.tw',
    'pierrecalcaire.com',
    'pierreminiggio.com',
    'pierreminiggio.fr',
    'touslesverbes.fr',
    'touslesverbes.com'
];
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

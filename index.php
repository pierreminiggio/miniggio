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
    'miniggio.art',
    'miniggio.be',
    'miniggio.best',
    'miniggio.cloud',
    'miniggio.de',
    'miniggio.dev',
    'miniggio.digital',
    'miniggio.eu',
    'miniggio.fr',
    'miniggio.fun',
    'miniggio.link',
    'miniggio.me',
    'miniggio.net',
    'miniggio.online',
    'miniggio.org',
    'miniggio.ovh',
    'miniggio.shop',
    'miniggio.site',
    'miniggio.space',
    'miniggio.store',
    'miniggio.tech',
    'miniggio.uno',
    'miniggio.website',
    'miniggio.xyz',
    'miniggiodev.fr',
    'pierre.uno',
    'pierre.tw',
    'pierrecalcaire.com',
    'pierreminiggio.com',
    'pierreminiggio.fr',
    'touslesverbes.fr',
    'touslesverbes.com'
];
?>Réservés par <a href="https://miniggiodev.fr" target="blank">Pierre</a> :
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

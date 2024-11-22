<?php

$currentFolder = __DIR__ . DIRECTORY_SEPARATOR;

$domains = require_once $currentFolder . 'domains.php';

echo json_encode($domains);

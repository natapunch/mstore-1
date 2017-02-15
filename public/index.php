<?php

$loader = require '../vendor/autoload.php';

$loader->addPsr4("My\\", dirname(__FILE__).'/../src/');

$page = new My\Page();
$page->show();

echo "<pre>";
print_r($_SERVER);

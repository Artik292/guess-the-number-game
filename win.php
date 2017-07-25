<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$n = $_GET['n'];

$app = new \atk4\ui\App(' I won, it was '.$n.' !');
$app->initLayout('Centered');

$button = $app->layout->add(['Button', 'Play again.','iconRight'=>'refresh']);
$button->set(['primary'=>true]);
$button->set(['size big'=>true]);
$button->link(['main','b'=>100,'m'=>0]);

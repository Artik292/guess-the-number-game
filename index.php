<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Welcome to the game!');
$app->initLayout('Centered');

$app->add(new Header(['Rules of the game', 'size'=>1]));

$app->add(new Header(['Max number is 100, Min number is 1.', 'size'=>1]));

$button = $app->layout->add(['Button', "Begin the game!",'iconRight'=>'smile']);
$button->set(['primary'=>true]);
$button->set(['size big'=>true]);
$button->link(['main','b'=>100,'m'=>0]);

<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$number = $_GET['number'];

$app = new \atk4\ui\App('Добро пожаловать в игру!');
$app->initLayout('Centered');

$app->add(['Header', ' Я выиграл, Ваше загаданное число, это '.$number.' !']);

$button = $app->layout->add(['Button', 'Сыграть ещё раз.','iconRight'=>'refresh']);
$button->set(['primary'=>true]);
$button->set(['size big'=>true]);
$button->link(['main','max'=>100,'min'=>0]);

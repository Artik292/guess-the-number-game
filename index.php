<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в игру!');
$app->initLayout('Centered');

$app->add(['Header', 'Инструкция']);

$text = $app->add(['Text']);
$text->addParagraph('Эта игра демонстрирует, как использовать Links, Buttons, Headers, Text в Agile Toolkit.');
$text->addParagraph("Для игры Вам необходимо загадать любое целое число от 1 до 100 включительно. После того, как Вы загадали число, нажмите кнопку 'Начать игру!' ");

$button = $app->layout->add(['Button', "Начать игру!",'iconRight'=>'smile']);
$button->set(['primary'=>true]);
$button->set(['size big'=>true]);
$button->link(['main','max'=>100,'min'=>0]);

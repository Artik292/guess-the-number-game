<?php

<?PHP
require 'vendor/autoload.php';
echo 'by katee4ka';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');
$button=$app->add('Button');
$button->set('Нажми :)');
$button->icon='instagram';
$button->link('https://www.instagram.com/');
$button=$app->add('Button');
$button->set('Кликай :3');
$button->icon='vk';
$button->link('https://vk.com/');
$button=$app->add('Button');
$button->('Жми :0');
$button->icon='facebook';
$button->link('https://www.facebook.com/');








/*require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в игру!');
$app->initLayout('Centered');

$app->add(['Header', 'Инструкция']);

$text = $app->add(['Text']);
$text->addParagraph('Эта игра демонстрирует, как использовать Links, Buttons, Headers, Text в Agile Toolkit.');
$text->addParagraph("Для игры Вам необходимо загадать любое целое число от 1 до 100 включительно. После того, как Вы загадали число, нажмите кнопку 'Начать игру!' ");

$button = $app->layout->add(['Button', "Начать игру!",'iconRight'=>'smile']);
//$button->set(['primary'=>true]);
$button->link(['main','max'=>100,'min'=>0]);
$button->addClass('teal inverted');*/

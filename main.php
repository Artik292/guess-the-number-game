<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в игру!');
$app->initLayout('Centered');

    $max = $_GET['max'];
    $min = $_GET['min'];

    $number = round(($max+$min)/2);

    $app->add(new Header(['Ваше число это '.$number.' ?', 'size'=>1]));

    $button = $app->layout->add(['Button', "Да, это моё число!",'icon'=>'empty star']);
    $button->set(['primary'=>true]);
    $button->link(['win','number'=>$number]);

    $button = $app->layout->add(['Button', 'Нет, моё число меньше.','icon'=>'arrow down']);
    $button->link(['main','max'=>$number,'min'=>$min]);

    $button = $app->layout->add(['Button', 'Нет, моё число больше.','icon'=>'arrow up']);
    $button->link(['main','max'=>$max,'min'=>$number]);

    $button = $app->layout->add(['Button', 'Сыграть ещё раз.','icon'=>'refresh']);
    $button->link(['index']);

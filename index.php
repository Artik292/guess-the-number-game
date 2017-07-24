<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Welcome to the game!');
$app->initLayout('Centered');

$a = [];
$m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$m_register->addField('max');
$m_register->addField('min');

$f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
$f->setModel($m_register);

$f->onSubmit(function ($f) {
    if ($f->model['min'] == '') {
        return $f->error('min', "This place can't be empty.");
    }

    if ($f->model['max'] == '') {
        return $f->error('max', "This place can't be empty.");
    }

  $s = $f->model['min'];
  $b = $f->model['max'];
  return new \atk4\ui\jsExpression(['document.location = "main.php"','s'=> $s,'b'=>$b']);
}
);

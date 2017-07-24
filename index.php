<?php

require 'vendor/autoload.php';

//session_start();

use \atk4\ui\Button;
use \atk4\ui\Buttons;
use \atk4\ui\Header;
use \atk4\ui\Icon;
use \atk4\ui\Label;
use \atk4\ui\Template;
use \atk4\ui\View;

$app = new \atk4\ui\App('Computer will guess the number');
$app->initLayout('Centered');

if (!isset($_GET['r'])) {
  $b = 100;
  $m = 1;
  $n =round(($b + $m) / 2);
}


  /*if (!isset($_GET['m'])) {
      $a = [];
      $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
      $m_register->addField('max');

      $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
      $f->setModel($m_register);

      $f->onSubmit(function ($f) {
          if ($f->model['max'] == '') {
              return $f->error('name', "This place can't be empty.");
          } else {
        $max_n = $f->model['max'];
        return new \atk4\ui\jsExpression('document.location = "index.php"', ['m' => $max_n]);
        //return new \atk4\ui\jsExpression(['document.location = "robot.php"','m'=>$max_n]);
      }
    });
  } else { */
  if (isset($_GET['r'])) {
    $n = $_GET['n'];
    $m = $_GET['m'];
    $b = $_GET['b'];
          if ($_GET['r'] == 'w') {
            $app->add(new Header(['Your number is '.$n.' !', 'size'=>1]));
          } elseif ($_GET['r'] == 's') {
            $b = $n;
            $n = round (($b + $m) / 2);
            $app->add(new Header(['Your number is '.$n.' ?', 'size'=>1]));
          } elseif ($_GET['r'] == 'b') {
            $m = $n;
            $n = round (($b + $m) / 2);
            $app->add(new Header(['Your number is '.$n.' ?', 'size'=>1]));
          }
        } else {
          $app->add(new Header(['Your number is '.$n.' ?', 'size'=>1]));
        }
    $button = $app->layout->add(['Button', "Yes, it's my number!",'iconRight'=>'external']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['index','r'=>'w','b'=>$b,'m'=>$m,'n'=>$n]);

    $button = $app->layout->add(['Button', 'No, my number is smaller.','iconRight'=>'external']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['index','r'=>'s','b'=>$b,'m'=>$m,'n'=>$n]);

    $button = $app->layout->add(['Button', 'No, my number is bigger.','iconRight'=>'external']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['index','r'=>'b','b'=>$b,'m'=>$m,'n'=>$n]);

    $button = $app->layout->add(['Button', 'Play again.','iconRight'=>'external']);
    $button->set(['primary'=>true]);
    $button->set(['size big'=>true]);
    $button->link(['index']);
//}

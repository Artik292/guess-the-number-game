<?php

require 'vendor/autoload.php';

use \atk4\ui\Button;

$app = new \atk4\ui\App('Guess the number');
$app->initLayout('Centered');

session_start();

if (!isset($_SESSION['game'])) {
  $secret = rand(1,128);
  $_SESSION['game'] = $secret;
  echo $secret;
} else {
  $secret = $_SESSION['game'];
  echo $secret;
}

if (isset($_SESSION['n'])) {
  echo ' '.$_SESSION['n'];
}

$button = new Button();
$button->set('Play again');
$button->set(['primary'=>true]);
$button->set(['size big'=>true]);
$button->link('re.php');
$app->add($button);

    $a = [];
    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
    $m_register->addField('number');

    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
    $f->setModel($m_register);

	  $f->onSubmit(function ($f) use($secret)  {
        if ($f->model['number'] == '') {
            return $f->error('number', "Please, enter the number.");
          } else {
                  $s = $f->model['number'];
                  $_SESSION['w'] = $s;
                  //if (ctype_digit($s))
                  if ($s == $secret) {
                      $_SESSION['s'] = "o";
                      return 'You win!';
                } elseif ($s < $secret) {
                      $_SESSION['s'] =  "s";
                } elseif ($s > $secret) {
                      $_SESSION['s'] =  "b";
                }
                if (isset($_SESSION['n'])) {
                  $_SESSION['n'] = $_SESSION['n'] + 1;
                } else {
                  $_SESSION['n'] = 1;
                }
      			//return "Hello $s ";
			return new \atk4\ui\jsExpression('document.location = "index.php" ');
		}
    });

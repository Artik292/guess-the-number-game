<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Guess the number');
$app->initLayout('Centered');

$secret = rand(1,128);
echo $secret;

    $a = [];
    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
    $m_register->addField('number');

    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
    $f->setModel($m_register);

	  $f->onSubmit(function ($f,$secret) {
        if ($f->model['number'] == '') {
            return $f->error('number', "Please, enter the number.");
          } else {
                  $s = $f->model['number'];
                  //if (ctype_digit($s)) 
                  if ($s == $secret) {
                      return "You win";
                } elseif ($s < $secret) {
                      return "Your number is smaller";
                } elseif ($s > $secret) {
                      return "Your number is bigger";
                }


      			//return "Hello $s ";
			return new \atk4\ui\jsExpression('document.location = "index.php" ');
		}
    });

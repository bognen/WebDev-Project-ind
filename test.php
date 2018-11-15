<?php

$taInfo = array('AgtFirstName' =>'Vasil',
                'AgtMiddleInitial' => null,
                'AgtLastName' => 'Shevchencko',
                'AgtBusPhone' => '(403)336581',
                'AgtEmail' => 'vasil@yandex.ru',
                'AgtPosition' => 'junior associate');

include_once('functions.php');


insArray('agents',$taInfo);
?>

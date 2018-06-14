<?php
# incluide autoload to run our app

require __DIR__ . '/../vendor/run.php';
require __DIR__ . '/../vendor/autoload.php';

//$controller = new Controller;

$run = new Run('Controller');
echo '<pre>';
print_r($run);

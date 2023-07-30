<?php

define('URL', 'http://localhost/file_reader/public/index.php/');

require __DIR__ . '/../autoloader/autoloader.php';

use Reader\App; 

//web puslapio paleidimas
echo App::start();

?>
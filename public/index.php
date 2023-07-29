<?php

define('URL', 'http://localhost/creation_file_read/public/index.php/');

require __DIR__ . '/../autoloader/autoloader.php';

use Reader\App; 

//web puslapio paleidimas
echo App::start();

?>
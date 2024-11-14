<?php
require 'vendor/autoload.php';

Flight::route('/', function(){
    echo '¡Hola, bienvenido a mi sitio web!';
});

Flight::start();
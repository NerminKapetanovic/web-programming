<?php

require "vendor/autoload.php";

Flight::route('/', function() {
    echo "Hello Nermill";
});

Flight::route('/hello', function() {
    echo "Ovo je nova ruta";
});

Flight::start();

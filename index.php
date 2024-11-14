<?php
// Cargar Composer
require '../vendor/autoload.php';

// Configurar Flight para que use 'views' como directorio de plantillas
Flight::set('flight.views.path', '../views');

// Ruta para la página de inicio
Flight::route('/', function(){
    Flight::render('index');  // Carga views/index.php
});

// Ruta para la sección de administración
Flight::route('/admin', function(){
    Flight::render('admin');  // Carga views/admin.php
});

// Ruta para la sección de productos
Flight::route('/productos', function(){
    Flight::render('productos');  // Carga views/productos.php
});

// Iniciar Flight
Flight::start();
<?php
//Cargar variables definidas
require 'assets/paths/Paths.php';

// Cargamos el core de nuestro aplicativo
require_once 'core/ErrorController.php';
require_once 'core/FrontController.php';
require_once 'core/Controller.php';
require_once 'core/DataAccessLayer.php';

// Cargamos algunos helper por defecto
require_once 'helper/BaseHelper.php';
require_once 'helper/FormHelper.php';

// Creamos una instancia de nuestro FrontController
new FrontController();
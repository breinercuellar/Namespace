<?php 

require_once('models/Usuario.php');
require_once('controllers/UsuarioController.php');
require_once('views/usuario/mostrar.php');

use Pronamespace\Controllers\UsuarioController;

$controller = new UsuarioController();
$controller->mostrarUsuario('Breiner Cuellar','breiner@gmail.com');
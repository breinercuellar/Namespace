<?php 
namespace Pronamespace\Controllers;

use Pronamespace\models\Usuario;
use Pronamespace\views\Usuario\UsuarioView;

class UsuarioController
{
    public function mostrarUsuario($nombre, $email)
    {
        $usuario = new Usuario($nombre, $email);
        $usuarioView = new UsuarioView();
        $usuarioView->mostrar($usuario);
    }
}
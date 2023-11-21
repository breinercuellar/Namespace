<?php 
namespace Pronamespace\views\usuario;

use Pronamespace\models\Usuario;

class UsuarioView
{
    public function mostrar(Usuario $usuario)
    {
        echo "Nombre: " . $usuario->getNombre() . "<br>";
        echo "Email: " .$usuario->getEmail() . "<br>";
    }
}
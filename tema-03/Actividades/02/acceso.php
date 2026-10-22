<?php

/*

    Actividad 3.2
    Descripción; Formulario de registro con acceso según el perfil de usuario.
    Formulario de registro;
        - Nombre de usuario
        - Contraseña o password
        - Email  
        - Perfil de usuario (Admin, edit, user)

    Tipos de perfiles y privilegios;
        - Admin; Añadir, Eliminar, Consultar y Actualizar
        - Edit; Añadir, Actualizar y Consultar
        - User; Consultar

*/

// Models

// Negociado
// Obtener los detalles del formulario de registro
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$perfil = $_POST['perfil'] ?? '';
$password = $_POST['password'] ?? '';

// Validación de los datos del formulario


// Include de la vista
include 'views/acceso.view.php';
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
// Crear lista de perfiles
$perfiles = ['admin', 'edit', 'user'];



// Include de la vista
include 'views/index.view.php';
<?php
if (!isset($_SERVER['PHP_AUTH_USER'])||$_SERVER['PHP_AUTH_USER']!='admin'||$_SERVER['PHP_AUTH_PW']!='paso') {
    header('WWW-Authenticate: Basic realm="Dominio De APA"');
    header('HTTP/1.0 401 Unauthorized');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 5 ejercicio 1 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 5 DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO</h1>
            <div id="nav">
                <h2>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h2>
            </div>
        </header>
        <?php
    echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
    exit;
} else {
    echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Introdujo {$_SERVER['PHP_AUTH_PW']} como su contraseña.</p>";
}
?>
        
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema5.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>

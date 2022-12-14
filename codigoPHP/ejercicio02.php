<?php
$entradaOK=true;

if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="Dominio De APA"');
        header('HTTP/1.0 401 Unauthorized');
        echo '<h1>Login Cancelado</h2>';
        exit;   
    }
    else {
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
            <h2>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</h2>
        </div>
    </header>
        <?php
        require_once '../conf/confDBPDODesarrollo.php';
    $sql1 = <<< sql
             select * from T01_Usuario where T01_CodUsuario='$_SERVER[PHP_AUTH_USER]';
            sql;
    $sql2 = <<< sql
            update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario='$_SERVER[PHP_AUTH_USER]';
            sql;
        try {
            $miDB = new PDO(DSN, USER, PASS);
            $statement1 = $miDB->prepare($sql1);
            $statement1->execute();
            $oUsuario = $statement1->fetchObject();
            if (is_object($oUsuario) && $oUsuario->T01_Password = hash('sha256', ($_SERVER['PHP_AUTH_USER'] . $_SERVER['PHP_AUTH_PW']))) {
                $statement2 = $miDB->prepare($sql2);
                $statement2->execute();
                if (is_object($oUsuario)) {
                    echo "Bienvenido $_SERVER[PHP_AUTH_USER] <br/>";
                    echo "Contraseña: $_SERVER[PHP_AUTH_PW]<br/>";
                    if($oUsuario->T01_NumConexiones>1){
                    echo "Fecha de la ultima conexion: $oUsuario->T01_FechaHoraUltimaConexion <br/>";
                    echo "Has entrado a la aplicacion $oUsuario->T01_NumConexiones veces <br/>";
                    }else{
                       echo "Es la primera vez que te conectas";
                    }
                    $statement2 = $miDB->prepare($sql2);
                    $statement2->execute();
                }
            }else{
                $entradaOK=false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } finally {
            unset($miDB);
        }
    }
    ?>
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema5.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://github.com/davidas02/201DWESProyectoTema5" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>

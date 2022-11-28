<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 5 David Aparicio</title>
        <link rel="stylesheet" href="webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="doc/img/favicon.ico"/>
    </head>
    <body>
        <header>
            <h1>TEMA 5 DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO</h1>
            <div id="nav">
                <h2>Ejercicios</h2>
            </div>
        </header>
        <table>
            <thead>
                <tr>
                    <th colspan=>Instrucción</th>
                    <th>Desarrollo</th>
                    <th>Explotación</th>
                    <th>Casa</th>
                </tr>
            </thead>
            <tr>
                <th>Creación</th>
                <td>
                    <a href="mostrarCodigo/mostrarCreacionBDDesarrollo.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarCreacionBDExplotacion.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarCreacionBDDesarrollo.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Carga Inicial</th>
                <td>
                    <a href="mostrarCodigo/mostrarCargaInicialBDDesarrollo.php">
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarCargaInicialBDExplotacion.php">
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarCargaInicialBDDesarrollo.php">
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Borrado</th>
                <td>
                    <a href="mostrarCodigo/mostrarBorradoBD.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarBorradoBDExplotacion.php">
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarBorradoBD.php">
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Configuracion Conexion</th>
                <td>
                    <a href="mostrarCodigo/mostrarConfiguracionConexionDesarrollo.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td>
                <td>
                    <a href="mostrarCodigo/mostrarConfiguracionConexionExplotacion.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td> 
                <td>
                    <a href="mostrarCodigo/mostrarConfiguracionConexionCasa.php" >
                        <img src="doc/img/mysql.png" alt="alt"/>
                    </a>
                </td> 
            </tr>
            <tr>
                <th>LibreriaValidacion</th>
                <td colspan="3">
                    <a href="mostrarCodigo/mostrarLibreriaValidacion.php">
                        <img src="doc/img/php.png" alt="alt"/>
                    </a>
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <table id="ejercicios">
                    <tr>
                        <th>Enunciado</th>
                        <th>Ejecutar</th>
                        <th>Mostrar</th>
                    </tr>
                    <tr>
                        <td>
                            0. Mostrar el contenido de las variables superglobales y phpinfo().
                        </td>
                        <td>
                            <a href="codigoPHP/ejercicio00.php"><img src="doc/img/play.png" alt="play"/></a>
                        </td>
                        <td>
                            <a ><img src="doc/img/php.png" alt="muestra"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().
                        </td>
                        <td>
                            <a href="codigoPHP/ejercicio01.php"><img src="doc/img/play.png" alt="play"/></a>
                        </td>
                        <td>
                            <a href="mostrarCodigo/mostrarEjercicio01.php"><img src="doc/img/php.png" alt="muestra"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Desarrollo de un control de acceso con identificación del usuario basado en la función header()
                            y en el uso de una tabla “Usuario” de la base de datos. (PDO).
                        </td>
                        <td>
                            <a href="codigoPHP/ejercicio02.php"><img src="doc/img/play.png" alt="play"/></a>
                        </td>
                        <td>
                            <a href="mostrarCodigo/mostrarEjercicio02.php"><img src="doc/img/php.png" alt="muestra"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Desarrollo de una aplicación (Proyecto LoginLogoffTema5) con control de acceso e identificación del usuario 
                            basado en un formulario (Login.php) con un botón de “Entrar” y en el uso de una tabla “Usuario” de la base de datos (PDO). 
                            En el caso de que tecleemos un usuario y password correctos se abrirá otra página (Programa.php) donde tendremos un botón de “Salir” 
                            que nos devolverá al Login.php (Funionalidad Logoff que nos redirige automáticamente a la página de autenticación).
                        </td>
                        <td>
                            <a><img src="doc/img/play.png" alt="play"/></a>
                        </td>
                        <td>
                            <a><img src="doc/img/php.png" alt="muestra"/></a>
                        </td>
                    </tr>
                </table>
        <footer> 
            <a href="../../">Home</a>
            <a href="../doc/CVDavidAparicioSir.pdf" target="blank"><img src="doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../201DWESProyectoDWES/indexProyectoDWES.php"><img src="doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>


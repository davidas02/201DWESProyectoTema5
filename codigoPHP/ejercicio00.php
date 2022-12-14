<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 5 ejercicio 0 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 5 DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO </h1>
            <div id="nav">
                <h2>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h2>
            </div>
            <style>
                table th{
                    position: relative;
                }
            </style>
        </header>
        <?php
        //Muestra del contenido de la variable $_SESSION con foreach()
            echo '<h2>Mostrar $_SESSION con foreach()</h2>';
            if(isset($_SESSION)){
            echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
            foreach ($_SESSION as $clave=>$valor){
                    echo "<tr>";
                    echo "<td><strong>$clave</strong></td>";
                    if(is_array($valor)){
                        echo '<td><table><th>Clave</th><th>valor</th>';
                        foreach ($valor as $c=>$v){
                            echo "<tr><th>$c</th>";
                            echo "<td>$v</td></tr>";
                        }
                        echo"</table></td>";
                    }else{
                       echo "<td>".$valor."</td>"; 
                    }
                    echo "</tr>";
            }
            echo "</table>";
            }else{
                echo '$_SESSION esta vacia';
            }
            echo "</br>";
            
        //Muestra del contenido de la variable $_COOKIE con foreach()
             echo '<h2>Mostrar $_SESSION con foreach()</h2>';
            
                echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
                foreach ($_SESSION as $clave => $valor) {
                    echo "<tr>";
                    echo "<td><strong>$clave</strong></td>";
                    if (is_object($valor)) {
                        echo '<td><table><th>Clave</th><th>valor</th>';
                        foreach ($valor as $c => $v) {
                            echo "<tr><th>$c</th>";
                            echo "<td>$v</td></tr>";
                        }
                        echo"</table></td>";
                    } else {
                        echo "<td>" . $valor . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            
            echo "</br>";
            
            
            
        //Muestra del contenido de la variable $_SERVER con foreach()
            echo '<h2>Mostrar $_SERVER con foreach()</h2>';
            echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
            foreach ($_SERVER as $key => $value) {
                echo "<tr>";
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</br>";
            
            //Muestra del contenido de la variable $_REQUEST con foreach()
            echo '<h2>Mostrar $_REQUEST con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_REQUEST as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            
            //Muestra del contenido de la variable $_GET con foreach()
            echo '<h2>Mostrar $_GET con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_GET as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_FILES con foreach()
            echo '<h2>Mostrar $_FILES con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_FILES as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_ENV con foreach()
            echo '<h2>Mostrar $_ENV con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_ENV as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_POST con foreach()
            echo '<h2>Mostrar $_POST con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_POST as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $GLOBALS con foreach(), uso de dos foreach para mostrar el contenido de algunos arrays dentro del array de la variable
            echo '<h2>Mostrar $GLOBALS con foreach()</h2>';
            echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
            foreach ($GLOBALS as $clave=>$valor){
                    echo "<tr>";
                    echo "<td><strong>$clave</strong></td>";
                    if(is_array($valor)){
                        echo '<td><table><th>Clave</th><th>valor</th>';
                        foreach ($valor as $c=>$v){
                            echo "<tr><th>$c</th>";
                            echo "<td>$v</td></tr>";
                        }
                        echo"</table></td>";
                    }else{
                       echo "<td>".$valor."</td>"; 
                    }
                    echo "</tr>";
            }
            echo "</table>";
            echo "</br>";
            echo phpinfo();
        ?>
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema5.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://github.com/davidas02/201DWESProyectoTema5" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>

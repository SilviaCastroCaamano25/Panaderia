<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="../imagenes/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="..\css\comentarios.css">
</head>
<body>
    <!--Cabecera de la página-->
    <div class="cabecera">
        <img class="logotipo" src="../imagenes/logotipo.png" alt="logotipo">
        <span>Panadería Fariña</span>

        <div class="mis_datos">
            <a href="../login_formulario.php"><div class="btn"><img src="../imagenes/log_in.png" alt="Log_in">Iniciar Sesión</div></a>
            <a href="#"><div class="btn"><img src="../imagenes/log_out.png" alt="Log_out">Cerrar Sesión</div></a>
        </div>
    
    </div>

    <!--Navegador de la página-->
    <div class="navegador">
        <div class="submenu"><a href="../PaginaPrincipal.html"><div class="boton">Nosotros</div></a></div>
        <div class="submenu"><a href="PaginaProductos.php"><div class="boton">Productos</div></a></div>
        <div class="submenu"><a href="comentarios.php"><div class="boton">Comentarios</div></a></div>
        <div class="submenu"><a href="../contacto.html"><div class="boton">Contáctanos</div></a></div>
    </div>

    <!--Cuerpo de la página-->
    <div class="contenido">

        <?php
            include "conexion.php";
            session_start();

            $vcomentarios_usuarios=mysqli_query($db, "SELECT * FROM vcomentarios_usuarios") or die ("Fallo en la consulta");
                if(mysqli_num_rows($vcomentarios_usuarios)>0){
                    while($com=mysqli_fetch_array ($vcomentarios_usuarios) ) {

                        echo "<div class='comentario'>";
                            echo "<p><span>Usuario: </span>".$com["usuario"]."</p>";
                            echo "<span style='margin-left:20px;';>Comentario: </span><p style='border: 1px solid black; padding: 20px;'>".$com["comentario"]."</p><br>";
                        echo "</div>";

                    }
                } else {
                    echo "Error Comentarios";
                }

            mysqli_free_result ($vcomentarios_usuarios);
            mysqli_close ($db);

        ?>
    </div>

    <!--Footer de la página-->
    <div class="footer">
        <div class="col1" >
            <h2>Políticas</h2>
            <a href="#">Política de privacidad</a>
            <a href="#">Política de cookies</a>
            <a href="#">Aviso legal</a>
        </div>
        <div class="col2" >
            <h2>Horario</h2>
            <p>Lunes – Sábado: 7:30 – 21:00</p>
            <p>Domingo: 9:00 – 14:00</p>
        </div>
        <div class="col3">
            <h2>Siguenos en:</h2>
            <div class="social">
                <a href="https://es-es.facebook.com"><img src="../imagenes/facebook.png" alt="facebook" width="50px" height="50px"></a>
                <a href="https://twitter.com"><img src="../imagenes/twitter.png" alt="twitter" width="50px" height="50px"></a>
                <a href="https://www.instagram.com"><img src="../imagenes/instagram.png" alt="instagram" width="50px" height="50px"></a>
                <a href="https://www.pinterest.es"><img src="../imagenes/pinterest.png" alt="pinterest" width="50px" height="50px"></a>
            </div> 
        </div>
    </div>
</body>
</html>
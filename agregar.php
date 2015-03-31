<html>
    <head>
     <title>Agregar nuevo registro</title>
    </head>
    <body>
        <div>
            <h2>Nuevo Registro</h2>
            <form action="guardar.php" method="POST">
                <label for="titulo">T&iacute;tulo</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo">
                </br>
                </br>
                <label for="cont">Contenido</label></br>
                <textarea name="cont" id="cont"></textarea>
                </br>
                </br>
                <label for="autor">Autor</label></br>
                <input type="text" maxlength="100" name="autor" id="autor">
                </br>
                </br>
                <label><?php echo 'Fecha<br/>'.date('Y-M-d');?></label>
                <br/>
                <br/>
                <input type="submit" name="agregar" Value="Agregar">
            </form>
        </div>
    </body>
</html>
<?php
    include("./direccion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Direcci&oacute;n</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
</head>
<body>
    <div class="container">    
        <?php
            // Comprobamos que se han enviado los datos del formulario.
            if(!empty($_POST)) {

                // Comprobamos que todos los campos contienen algun valor.
                if (isset($_POST["calle"]) && isset($_POST["numero"]) && isset($_POST["poblacion"]) && isset($_POST["pais"])) {
                        
                    // Creamos un nuevo objeto dirección.
                    $direccion = new Direccion($_POST["calle"], $_POST["numero"], $_POST["poblacion"], $_POST["pais"]);
                    
                    // Escribimos los datos.         
                    echo ("<h1>DATOS DIRECCI&Oacute;N</h1>");
                    echo ("<p>".$direccion->getCalle()."</p>");
                    echo ("<p>".$direccion->getNumero()."</p>");
                    echo ("<p>".$direccion->getPoblacion()."</p>");
                    echo ("<p>".$direccion->getPais()."</p>");
                } else {
                    // Si hay algun campo vacio mostramos un mensaje de error.
                    echo ("<p>No pueden quedar campos vacios</p>");
                };
            } else {
                // Si no se han enviado los datos del formulario mostramos un mensaje de error.
                echo ("<p>No se han enviado los datos del formulario</p>");
            };
        ?>   
    </div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php 

        $conexionSql = mysqli_connect("localhost", "root", "") or die ("No se pudo conectar con el servidor");
        mysqli_select_db($conexionSql, "bsharpproyect") or die ("No se pudo seleccionar la base de datos");
    
        if(isset($_POST['submitNuevoUsuario'])){
            $usuario = $_POST['usuario'];
            $email  = $_POST['email'];
            $contrasenia = $_POST['contrasenia'];
            $contraseniaRepetir = $_POST['contraseniaRepetir'];
            $insertarDatos = "INSERT INTO usuarios VALUES ('$usuario', '$email', '$contrasenia')";
            
            if($usuario == null || $email == null || $contrasenia == null || $contraseniaRepetir == null){
                echo "Porfavor, rellena todos los campos";
            }else{
                mysqli_query($conexionSql, $insertarDatos);
                echo "Los datos se enviaron con éxito";
            }
        }
    
        mysqli_close($conexionSql);

    ?>

</body>
</html>


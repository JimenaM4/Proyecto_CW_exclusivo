<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/registro.css">
    <title>Error</title>
</head>
<body>
    
</body>
</html>
<?php
    //comprobar que los valores existan
    require "./seguridad_hasheo.php";
    $include= require "./config.php";
    $nombre=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : false;
    $numcuen=(isset($_POST['numdecuen']) && $_POST["numdecuen"] != "")? $_POST['numdecuen'] : false;
    $tel=(isset($_POST['telefono']) && $_POST["telefono"] != "")? $_POST['telefono'] : false;
    $grupo=(isset($_POST['grupo']) && $_POST["grupo"] != "")? $_POST['grupo'] : false;
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : false;
    $acceder=(isset($_POST['entrar']) && $_POST["entrar"] != "")? $_POST['entrar'] : false;
    if($acceder=='2')
     {
        $sal = generarSal(); 
        $pimienta = generarPimienta();
        $contraHash = hashearContra($contra.$pimienta.$sal);
        // echo $sal."<br>".$pimienta."<br>".$contraHash;
        $con = connect();

         if ($include && $con)
         {
            $contras= "INSERT INTO contra (Id_contra, Id_usuario, Hashe, Sal) VALUES (0, NULL, '$contraHash', '$sal')";
            $query= mysqli_query($con, $contras);
            $sql = "INSERT INTO usuario (ID_usuario, NOMBRE, PASS, numero_cuenta, num_telefono, usuario, grupo) VALUES (NULL, '$nombre', 0, $numcuen, $tel, '$usuario', $grupo )";
            $res = mysqli_query($con, $sql);
            if($query && $res){
               echo "El usuario se creo";
            }

         }
        //echo $contra.$pimienta.$sal. "<br>";  ES LA CONTRASEÑA YA HASEADA CON SAL Y PIMIENTA
        //echo "Contraseña: $contraHash <br>";  
        //$contraCorrect = "4539c11a1627d730955603b48ec6589cf6aeeb9aad3aed3c93ffc4d0a7925a95"; CONTRASEÑA QUE SE GUARDARA EN DB
        //$salOriginal = "6490a21318897"; SAL QUE SE GUARDARA EN LA DB 
        // if(verificar_contra($contra, $contraCorrect, $salOriginal)){
        //     echo "Contraseña correcta";
        // }else{
        //     echo "Contraseña incorrecta";
        // } ES PARA VERIFICAR QUE LA CONTRASEÑA INGRESADA POR EL USUARIO SEA CORRECTA
        //echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../../Templates/inicio_sesion.html'>";
     }else {
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo completar el registro, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../Templates/registro.html'>Registrate</a></div>";
     }
    
?>
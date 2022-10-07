<?php



    $servidor = "mysql:host=".SERVIDOR.";dbname=".BD;
    $pdo = new PDO($servidor, USUARIO, PASSWORD);
    // echo "<script> alert('Conexion establecidad con exito') </script>";
// echo $servidor;



try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    // echo "<script> alert('Conexion establecidad con exito') </script>";
}
catch(Exception $e){
echo $e->getMessage();
echo "<script> alert('Error en la conexión') </script>";

}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php

require_once 'config.php';
require_once 'conexion.php';
require_once 'alumno.php';

$id=$_GET['id'];


$sql="SELECT * FROM tbl_alumnos WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->bindParam(1,$id);
$stmt->execute();

$alumno = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($alumno);
// echo "<br>";
// print_r($alumno);

?>

<div class="form">
<form action="modificarController.php" method="POST">
    <input type="hidden" name="id" id="id" value=<?php echo "$alumno[id]"?>>
  <label for="name">Nombre</label>
  <input type="text" id="nombre" name="nombre" value=<?php echo "$alumno[nombre]"?>><br><br>
  <label for="edad">Edad</label>
  <input type="text" id="edad" name="edad" value=<?php echo "$alumno[edad]"?>><br><br>
  
  <input type="submit" class="btn btn-info" value="ACTUALIZAR"></input>

</form>
</div>

</body>
</html>
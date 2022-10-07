


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require_once 'config.php';
require_once 'conexion.php';
require_once 'alumno.php';

$nombre=$_POST['name'];

$edad=$_POST['edad'];



$alu=new Alumno(null,$nombre,$edad);

// $alu->getNombre($nombre);
// $alu->getEdad($edad);

// $alu->getId($id);

// echo "$alu->nombre";

// forma 1

// $stmt=$pdo->prepare("INSERT INTO from tbl_alumnos (nombre,edad) VALUES (?,?)");
// $stmt->bindParam(1,$alu->nombre);
// $stmt->bindParam(2,$alu->edad);

// forma 2
// $stmt=$pdo->prepare("INSERT INTO from tbl_alumnos (nombre,edad) VALUES (:nombre,:edad)");
// $stmt->bingParam(":nombre",$alu->nombre);
// $stmt->bingParam(":edad",$alu->edad);


// forma 3 (Casting)

$stmt = $pdo->prepare("INSERT INTO tbl_alumnos (id, nombre, edad) VALUES (:id, :nombre, :edad)");
$stmt->execute((array)$alu);

// header('Location:vista.php');


// var_dump((array)$alu);
?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function aviso(url) {
        swal.fire ({
            title: 'Usuario creado',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Volver'
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }

    aviso('./vista.php');
</script>



</body>
</html>



<?php

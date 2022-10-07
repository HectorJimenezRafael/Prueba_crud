
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

$id=$_GET['id'];
echo "$id";

$sql="DELETE FROM tbl_alumnos WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->bindParam(1,$id);
$stmt->execute();

// header('Location:vista.php');

?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function aviso(url) {
        swal.fire ({
            title: 'Usuario borrado',
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



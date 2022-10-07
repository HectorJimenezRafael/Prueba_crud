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
require_once "alumno.php";

// $alu = new Alumno(0,"Fantasma",95);


$listaalumnos=Alumno::getAlumnos();


echo "<td><a type='button' class='btn btn-success' href='crearvista.php'>Crear</a></td>";
echo '<table border="1" class="table table-striped"> ';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>NOMBRE</th>';
    echo '<th>EDAD</th>';
    echo '<th>BORRAR</th>';
    echo '<th>MODIFICAR</th>';
    echo '</tr>';
    foreach ($listaalumnos as $alumno) {
        echo '<tr>';
        echo "<td>{$alumno['id']}</td>";
        echo "<td>{$alumno['nombre']}</td>";
        echo "<td>{$alumno['edad']}</td>";

        ?>
        <td><button type="button" class="btn btn-danger" onClick="aviso('borrarController.php?id=<?php echo $alumno['id']; ?>')" >Eliminar</button></td>                
        <td><button class="btn btn-primary" onClick="aviso('modificar.php?id=<?php echo $alumno['id']; ?>')" >Modificar</button></td>
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       </tr>
       <?php
    }
    echo '</table>';
?>

<script>

        function aviso(url) {
            Swal.fire({
                title: '¿Estas seguro?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
                })
        }

    </script>
</body>
</html>




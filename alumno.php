<?php

class Alumno {

    // atributos de la clase alumno
    public $id;
    public $nombre;
    public $edad;

// variblaes del constructor
    public function __construct($id,$nombre,$edad){

// Asignación de valores a los atributos
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

/**
* Esta funcion me devuelve a todos los alumnos y no le pasa ningun parametro
*/
    public static function getAlumnos(){
    require_once "config.php";
    require_once "conexion.php";


    $sentencia = $pdo->prepare("SELECT * FROM tbl_alumnos;");
    $sentencia->execute();

    $listaalumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $listaalumnos;
    }

// metodos get
    // public function getNombre(){
    //     return $this->nombre;
    // }

    // public function getEdad(){
    //     return $this->edad;
    // }

    // public function getId(){
    //     return $this->id;
    // }
    
}
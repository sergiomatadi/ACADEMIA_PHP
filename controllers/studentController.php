<?php
require_once '../models/StudentModel.php';
class studentcontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function show(){
        $alumno=new Modelo();

        $dato=$alumno->show("student", "1");
        require_once '../views/Student/show.php';
    }


    //INSERTAR
  public  function newStudent(){
        require_once '../views/Student/new.php';
    }
    
    public function receive(){
                $alm = new Modelo();
                $alm->nif=$_POST['nif'];
                $alm->nam=$_POST['name'];
                $alm->surname=$_POST['surname'];
                $alm->telephone=$_POST['telephone'];
                $alm->username=$_POST['username'];
                $alm->email=$_POST['email'];

                
                
     $this->model->receive($alm);
     //-------------
header("Location: student.php");

          }


    }
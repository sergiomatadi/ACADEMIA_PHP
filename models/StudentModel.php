<?php


class Student{

    private $dni;
    private $student;
    private $db;


    public function __construct(){
        $this->alumno=array();
        $this->db=new PDO('mysql:host=localhost;dbname=academia',"root","");
    }

    public function mostrar($tabla,$condicion){
        $query="SELECT * FROM  students";
  
        $result=$this->db->query($query);
        while ($table=$result->fetchAll(PDO::FETCH_ASSOC)) {
            $this->student[]=$table;
        }
        return $this->student;
      }
      public function  insert(Modelo $data){
      try {
      $query="INSERT INTO students (email, id, name, nif, pass, surname, telephone, username)VALUES(?,?,?,?,?,?,?,?)";
  
        $this->db->prepare($query)->execute(array($data->email, $data->id,$data->name,$data->nif,$data->surname,$data->telephone,$data->username));
  
      }catch (Exception $e) {
  
        die($e->getMessage());
      }
      }
      
    public function toupdate($table,$data,$condicion){
        $query="UPDATE $table SET $data WHERE $condicion";
        $result=$this->db->query($query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function delete($table,$condicion){
        $query="DELETE FROM $table WHERE $condicion";
        $result=$this->db->query($query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
  }
  
?>

    


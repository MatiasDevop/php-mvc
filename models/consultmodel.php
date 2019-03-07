<?php
    include_once 'models/student.php';
class ConsultModel extends Model{
   
    public function __construct(){
        parent::__construct();
    }
    
    public function get(){
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM students");

            while($row = $query->fetch()){
                $item = new Student();
                $item->matricula = $row['matricula'];
                $item->name = $row['name'];
                $item->lastname = $row['lastname'];

                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item= new Student();

        $query = $this->db->connect()->prepare("SELECT * FROM students WHERE matricula = :matricula");
        try{
            $query->execute(['matricula' => $id]);

            while($row = $query->fetch()){
                $item->matricula = $row['matricula'];
                $item->name = $row['name'];
                $item->lastname = $row['lastname'];
            }
            return $item;// get object
        }catch(PDOException $e){
            return null;
        }

    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE students SET name = :name, lastname =:lastname WHERE matricula =:matricula");

        try{

            $query->execute([
                'matricula' => $item['matricula'],
                'name' =>  $item['name'],
                'lastname' => $item['lastname']
            ]);
            return true;

        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        
        $query = $this->db->connect()->prepare("DELETE FROM students WHERE matricula = :id");
        try{
            $query->execute([
                'id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

    }
}


?>
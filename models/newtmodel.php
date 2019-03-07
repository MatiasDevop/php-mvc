<?php
class NewtModel extends Model{
   
    public function __construct(){
        parent::__construct();
    }
    
    public function insert($data){
        //insert data in DB use alwasy this.
        try{// try to validate matricula duplicates to get error more frendly.
            $query = $this->db->connect()->prepare('INSERT INTO students(matricula, name, lastname) VALUES(:matricula, :name, :lastname)');
            $query->execute([
                'matricula' =>$data['matricula'], 
                'name' =>$data['name'], 
                'lastname' => $data['lastname']
                ]);
            return true;
                            
        }catch(PDOException $e){
            //echo $e->getMessage();
           // echo "its already exist this matricula.";
            return false;
        }
      
    }
}


?>
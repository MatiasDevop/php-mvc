<?php
 class Consult extends Controller{

   // alwayys use $this to declare or use variables
    function __construct()
    {
       parent::__construct();// to use herencia
       $this->view->students = [];
       //here call the view render and send a parameter.
       //$this->view->render('consult/index');
      // echo "<p> New controller Main</p>";     
    }
    function render(){
       // mapper... to access.
       $students = $this->model->get();
       $this->view->students = $students;
      $this->view->render('consult/index');
   }

   function lookAtStudent($param = null){
    //only for example var_dump($param);
      $idStudent = $param[0];
      // get from models or consult model;
      $student = $this->model->getById($idStudent);
      session_start();// its work to start ssession and to not change through inspect browser.
      $_SESSION['id_lookAtStudent']=$student->matricula;
      $this->view->student=$student;
      $this->view->message = "";
      $this->view->render('consult/detalle');
   }
   function updateStudent(){
    session_start();
    $matricula = $_SESSION['id_lookAtStudent'];
    $name   = $_POST['name'];
    $lastname = $_POST['lastname'];
    // it works to destroy session
    unset($_SESSION['id_lookAtStudent']);

    if($this->model->update(['matricula' => $matricula, 'name' => $name, 'lastname' => $lastname])){
      //update student succesfully.
      $student = new Student();
      $student->matricula = $matricula;
      $student->name = $name;
      $student->lastname= $lastname;
      // to show in input to edit
      $this->view->student=$student;
      $this->view->message = "Student was update succesfully..";

    }else{
      // error message
      $this->view->message="It dosen't update success..";

    }
    $this->view->render('consult/detalle');

   }
   // param = null is to id
   function deleteStudent($param = null){
      
    $matricula = $param[0];

      if($this->model->delete($matricula)){
        //$this->view->message="Student was delete....";
        //to ajax.
        $message = "student deleted success..";
      }else{
          //to ajax
        $message = "it can't remove it";
          //$this->view->meesage="Student can't delete...";
      }

      //$this->view->render('consult/index'); this is to go direccion
      //$this->render();// this is to index default. but to ajax it doesnt matter.
      echo $message;
      //echo 'it was remove it ' . $matricula;
   }
 }
?>
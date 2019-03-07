<?php
 class Main extends Controller{


    function __construct()
    {
       parent::__construct();// to use herencia
       //here call the view render and send a parameter.
       //$this->view->render('main/index');
      // echo "<p> New controller Main</p>";     
    }
    function render(){
      $this->view->render('main/index');
   }

    function greeting(){ //method
       echo "execute the method greeting";
    }

 }
?>
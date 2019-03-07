<?php
    class Newt extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->message="";
            //$this->view->render('new/index');
        }
        // for dont show the message on botom or down
        function render(){
            $this->view->render('new/index');
        }
        function registerNewStudent(){
        
            $matricula=$_POST['matricula'];
            $name =$_POST['name'];
            $lastname =$_POST['lastname'];
            $message = "";
            if($this->model->insert(['matricula' => $matricula, 'name' => $name, 'lastname' => $lastname]))
            {
                $message = "new student was created..:)";
            }else{
                $message = "this matricula already exist ";
            }
            // to show message in the same view and render it
            $this->view->message = $message;
            $this->render();
            // echo "student was created";
            //$this->model->insert();
        }
    }


?>
<?php
  // Base Class
    class Controller{

        function __construct()
        {
           // echo "<p> Base Controller </p>";
            $this->view = new View();
        }
        //here loadgin model to comunicate 
        function loadModel($model){
          $url='models/'.$model.'model.php';

          if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
          }
        }
    }


?>
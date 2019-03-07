<?php

    require_once 'controllers/errorc.php';

class App{
    function __construct(){

        //echo "<p>Nueva APP</p>";
        //put a condition
        $url = isset($_GET['url']) ? $_GET['url']:null;//$_GET['url']; // its to router when you call the controller.
        //echo $url;
        $url = rtrim($url,  '/');
        $url = explode('/', $url);
        // when entry without define a controller.
        if(empty($url[0])){
            $fileController = 'controllers/main.php';
            require_once $fileController;
            $controller = new Main();
            $controller->render();
            $controller->loadModel('main');
            
            return false;
        }else{
            $fileController = 'controllers/' . $url[0] . '.php';
        }

        //var_dump($url);// its to show in array all you typing in url.
        $fileController = 'controllers/' . $url[0] . '.php';
        //mapeo to see if exist that controller
        //when exists controller
        if(file_exists($fileController)){
            require_once $fileController;
            $controller=new $url[0];
            //its for load our model.
            $controller->loadModel($url[0]);
            //# elements of array.
            $nparam = sizeof($url);
            // si se llama a un método
            if($nparam > 1){
                // hay parámetros
                if($nparam > 2){
                    $param = [];
                    //here why 2 because 0 and 1 is for controller and method.
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    // solo se llama al método
                    $controller->{$url[1]}();
                }
            }else{
                // si se llama a un controlador
                $controller->render();  
            }
                
            // if(isset($url[1])){// to calla methods  since pos[1] it must be call any method.
            //     $controller->{$url[1]}();// for text transform to method.
            // }
        }else{
            $controller= new ErrorC();
            
        }
    }
}


?>
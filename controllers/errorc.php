<?php
//also to pass information directly to view from here.
    class ErrorC extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->message = "that was a error to requested the page..";
            $this->view->render('error/index');//this is to show view or route not delete  
            //echo "<p>Error to loadiang resource</p>";
        }
    }

?>
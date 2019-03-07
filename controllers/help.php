<?php
    class Help extends Controller{
        function __construct()
        {
            parent::__construct();
           // $this->view->render('help/index');
        }
        
        function render(){
            $this->view->render('help/index');
        }
    }

?>
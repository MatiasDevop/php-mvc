<?php
    // Base Class
 class View{
     function __construct()
     {
        // echo "<p> Base view</p>";
     }
     //here render the view by paramenter name
     function render($name){
         require 'views/' . $name . '.php';
     }
 }
?>
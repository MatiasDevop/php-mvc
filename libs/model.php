<?php
  // Base Class
  // here we have to make the querys ,connection db etcc..
 class Model{
     function __construct()
     {
         $this->db = new Database();
     }
 }
?>
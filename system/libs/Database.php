<?php
class Database
{
   protected $db=array();
   public function __construct()
   {
       $host="localhost";
       $user="root";
       $pass="";
       $db="MVC";
       $this->db=new mysqli($host,$user,$pass,$db);
   } 
    
}

<?php
class Contact extends Main{
    public function __construct(){
        parent::__construct();   
        $con=$this->load->model("contactModel"); 
        $data=$con->info(); 
        $this->load->view("contact",$data);
    }

    

}

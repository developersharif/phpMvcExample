<?php
class About extends Main{

    public function __construct(){
        parent::__construct();
        $about_obj=$this->load->model("aboutModel");
        $data=$about_obj->data();
        $this->load->view("about",$data);
    }

    
}

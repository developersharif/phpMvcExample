<?php
class Home extends Main{
   public function __construct(){
       parent::__construct();
    }

    public function name($name){
        echo " Name: ".$name;
    }

    public function default(){
        $data="Dynamic data get from the Home controller";
        $this->load->view("home",$data);
    }

    public function catlist(){
        $cate=$this->load->model("Category");
        $data=$cate->catlist();
        $this->load->view("category",$data);
    }


}
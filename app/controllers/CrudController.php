<?php
class CrudController extends Main
{

  public function __construct()
  {
      parent::__construct();
  }

  public function add(){
    $obj=$this->load->model("CrudModel"); 
    $data=$obj->select();
    $this->load->view("crud",$data);
  }

  public function insert(){
    $obj=$this->load->model("CrudModel"); 
    $msg=$obj->insert();
    if($msg){
     header("location: add&inserted");
    }else{
      echo "error";
    }
  }

  public function selectbyid(){
    $obj=$this->load->model("CrudModel"); 
    $upinfo=$obj->selectbyid();
    $this->load->view("crud",$upinfo);
  }
  
  public function update(){
    $obj=$this->load->model("CrudModel"); 
    $msg=$obj->update();
    if($msg){
     header("location: add&updated");
    }else{
      echo "error";
    }
    }  
    
    public function delete(){
      $obj=$this->load->model("CrudModel"); 
      $msg=$obj->delete();
      if($msg){
      header("location: /MVC/crudcontroller/add&deleted");
      }else{
        echo "error";
      }
    }






    
}

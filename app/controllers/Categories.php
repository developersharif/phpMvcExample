<?php 
class Categories extends Main
{
    public function __construct()
    {
        parent::__construct();
        $model=$this->load->model("Category");
        $data=$model->catlist();
        $this->load->view("category",$data);
    }
}

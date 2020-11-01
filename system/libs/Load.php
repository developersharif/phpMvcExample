<?php
class Load{
public function view($filename,$data=NULL){
include("app/view/".$filename.".php");
}

public function model($modelname){
    include("app/models/".$modelname.".php");
    return new $modelname();
}


}

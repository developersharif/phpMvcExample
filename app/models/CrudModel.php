<?php 
class CrudModel extends Model
{
    public function __construct()
    {
    parent::__construct();
        
    }

    public function select(){
        $sql="select * from users";
        $query=mysqli_query($this->db,$sql);
        $result=$query;
        return $result;
    }

    public function insert(){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $sql="insert into users (name,email,gender) values('$name','$email','$gender')";
        $query=mysqli_query($this->db,$sql);
        if($query){
           return true;
        }else{
            return false;
        }
        
    } 
    
    
        public function update(){
            $id=$_GET["id"];
            $name=$_POST["name"];
            $email=$_POST["email"];
            $gender=$_POST["gender"];
            $sql="UPDATE `users` SET name='$name',email='$email',gender='$gender' where id='$id'";
            $query=mysqli_query($this->db,$sql);
            if($query){
            return true;
            }else{
                return false;
            }
        } 
        
        
        public function delete(){
            $id=$_GET["delid"];
            $sql="DELETE from users where id='$id'";
            $query=mysqli_query($this->db,$sql);
            if($query){
            return true;
            }else{
                return false;
            }
        }

       public function selectbyid(){
        $id=$_GET["id"];
        $sql="select * from users where id='$id'";
        $query=mysqli_query($this->db,$sql);
        $result=$query;
        return $result;

       } 
}

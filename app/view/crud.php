<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>

<body>
    <center> <a href="/MVC">Home</a> </center>
    <?php    if(isset($msg)){

        if($msg){
            echo "data successfully inserted";
        }else{
            echo "error"; 
        }
    }         ?>
    <?php if(!isset($_GET["id"])){?>
    <form action="insert" method="post">
        <table>
       <tr>
           <td> name: </td> <td> <input type="text" name="name" required> </br> </td>
       </tr>
       <tr>
           <td>Email:</td>
           <td><input type="text" name="email" required> </br></td>
       </tr>
         <tr>
             <td> Gender:</td>
             <td> <input type="text" name="gender" required> </br></td>
         </tr>
        </table>
        <input type="submit" value="Save" name="submit"> </br>
    </form>
    <br>
    <?php } ?>
    <?php if(isset($_GET["id"])){
        $row=$data->fetch_assoc()
        ?>
        ..
    <form action="/MVC/crudcontroller/update&id=<?php echo $row["id"]; ?>" method="post">
        <table>
       <tr>
           <td> name: </td> <td> <input type="text" value="<?php echo $row["name"] ?>" name="name" required> </br> </td>
       </tr>
       <tr>
           <td>Email:</td>
           <td><input type="text" value="<?php echo $row["email"] ?>" name="email" required> </br></td>
       </tr>
         <tr>
             <td> Gender:</td>
             <td> <input type="text" value="<?php echo $row["gender"] ?>" name="gender" required> </br></td>
             
         </tr>
        </table>
        <input type="submit" value="Save" name="submit"> </br>
    </form>
    <br>
    <?php } ?>
    <?php if(isset($data)){ ?>
        <?php if(!isset($_GET["id"])){?>
    <div class="info">
        <table border="1">
            <tr>
                <td>Nmae:</td>
                <td>Email: </td>
                <td>Gender: </td>
                <td>Action: </td>
            </tr>
            <?php while($row=$data->fetch_assoc()){   ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><a href="selectbyid/&id=<?php echo $row["id"]; ?>" rel="noopener noreferrer">Edit</a>|<a href="delete/&delid=<?php echo $row["id"]; ?>">Delete</a></a:li>
                </td>

            </tr>
            <?php } ?>
        </table>
    </div>
            <?php } } ?>
 <?php
if(isset($_GET["delid"])){
echo "delete action goes here";
}




?>



</body>

</html>
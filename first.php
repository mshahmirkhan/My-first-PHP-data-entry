
<?php

    if(isset($_POST['name'])){

    $server= "localhost";
    $username= "root";
    $password= "root";
    $dbname = 'Class';
    $db_port = 8889;

    $con=mysqli_connect($server,$username,$password,$dbname,$db_port);

    if(!$con){
        die("Doesn't connect to the database".mysqli_connect_error());
    }else{

        $rollNo=$_POST['rollNo'];
        $name=$_POST['name'];

        echo "connection is successfull";
        
        $sql="INSERT INTO `Class`.`classtable` (`rollNo`, `name`) VALUES ('$rollNo', '$name')";
        
        echo "<br/>". $sql;
        
        
        if($con->query($sql)==true){
            echo "<br/> SuccessFull inserted";
        }else{
            echo $con->error();
        }
        $con->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="first.php" method="post">
        <input type="text" name="rollNo" placeholder="roll number"></input>
        <input type="text" name="name" placeholder="Student name"></input>
        <button type="submit" >Submit</button>
    </form>
</body>
</html>

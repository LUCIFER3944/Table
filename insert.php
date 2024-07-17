<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('data.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql="INSERT INTO `table`( `name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
    if(mysqli_query($conn, $sql)){
        echo "data inserted";
        header("location:table.php");
}
}
?>
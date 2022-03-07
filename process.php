<?php
include 'database.php';
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
   
    $sql="insert into students(name,email,password,phone) values('$name','$email','$password','$phone')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('new record inserted')</script>";

    }
    else{
        echo "error:".mysqli_error($conn);

    }
    mysqli_close($conn);
}
?>
<?php
$conn = mysqli_connect("localhost","root","","jobtest");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$query)){
        header("Location: dashboard.php");
    }else{
        echo "Error";
    }
}
?>

<a href="login.php" class="btn btn-info">Login</a>
<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['name']['photo'];
    $temp = $_FILES['tmp_name']['photo'];
    $role = $_POST['role'];

    if($password == $cpassword){
        
    }
    else{
        echo '
            <script>
                alert("Password and confirm password does not match!");
                window.location = "../routes/register.html";
            </script>
            ';
    }
?>
<?php
session_start();
include("connect.php");

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile = '$mobile' AND password = '$password' AND role = '$role'");

if (mysqli_num_rows($check) > 0) {
    // fetching user data
    $userdata = mysqli_fetch_array($check);
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role = 2");
    // fetching groups data
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupsdata'] = $groupsdata;

    echo '
            <script>
                window.location = "../routes/dashboard.php";
            </script>
            ';    
}
else {
    echo '
            <script>
                alert("Invalif Credentials or User not found!");
                window.location = "../";
            </script>
            ';
}
?>
<?php
    session_start();

    if(!isset($_SESSION['userdata'])) {
        header("location: ../");
    }

    $userdata = $_SESSION['userdata'];
?>

<html>
    <head>
        <title>Online-Voting-System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>

        <style>
            #backbtn {
                padding: 5px;
                font-size: 15px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                float: left;
            }

            #logoutbtn {
                padding: 5px;
                font-size: 15px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                float: right;
            }
        </style>

        <div id="mainSection">
            <center>
            <div id="headerSection">
                <button id="backbtn">Back</button>
                <button id="logoutbtn">Logout</button>
                <h1>Online-Voting-System</h1>
            </div>
            </center>
            <hr>

            <div id="Profile">
                <img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"><br><br>
                <b>Name:</b> <?php echo $userdata['name']?> <br><br>
                <b>Mobile:</b> <?php echo $userdata['mobile']?> <br><br>
                <b>Address:</b> <?php echo $userdata['address']?> <br><br>
                <b>Status:</b> <?php echo $userdata['status']?> <br><br>
            </div>

            <div id="Group"></div>
        </div>
    </body>
</html>
<?php
    session_start();

    if(!isset($_SESSION['userdata'])) {
        header("location: ../");
    }
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
            <div id="headerSection">
            <button id="backbtn">Back</button>
            <button id="logoutbtn">Logout</button>
            <h1>Online-Voting-System</h1>
            </div>
            <hr>

            <div id="Profile">
            </div>

            <div id="Group"></div>
        </div>
    </body>
</html>
<?php
    session_start();
    if(!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== 'yes') {
        header('HTTP/1.1 302 Redirect');
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/schedule_table.css">
        <link rel="stylesheet" type="text/css" href="css/schedule.css">
        <link rel="stylesheet" href="plugins/SplitterView/SplitterView.css" type="text/css">
        <link href="plugins/Calendar/calendar.css" type="text/css" rel="stylesheet">
        <link href="plugins/TimePicker/clock.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/config.js"></script>
        <script src="js/SidebarView.js"></script>
        <script src="js/Draggable.js"></script>

        <script src="mvc/Event.js"></script> 
        <script src="mvc/models/ModelObject.js"></script>
        <script src="mvc/models/Project.js"></script>
        <script src="mvc/models/ProjectCollection.js"></script>
        <script src="mvc/models/ShoutModel.js"></script>
        <script src="plugins/SplitterView/SplitterView.js"></script>
        
        <script src="js/nav.js"></script>
        <script src="js/Modal.js"></script>
        <script src="js/schedule.js"></script>
        <script src="plugins/Calendar/moment.js" type="text/javascript"></script>
        <script src="plugins/Calendar/calendar.js" type="text/javascript"></script>
        <script src="plugins/TimePicker/clock.js" type="text/javascript"></script>
        
        <script src="js/RowColumnMVC.js"></script>
        <script src="js/main.js"></script>

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300">
        <link rel="stylesheet" type="text/css" href="css/sidebar.css">
        <title>Shout</title>
    </head>
    <body>
        <div class="menu">
            <ul>
                <li><span class="menu-item">Shout...</span>
                    <ul class="dropdown">
                        <li>Social Media...</li>
                        <li>My Profile...</li>
                        <li id="menu-item-accounts">Accounts...</li>
                        <li id="menu-item-scheduling">Scheduling...</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="main-container">
            
        
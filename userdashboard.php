<?php
    include 'config/com.php';
    session_start();

		$ssql = "select * from info_table";
		$info = $mysqli->query($ssql);




    include 'view/userdashboard_view.php';

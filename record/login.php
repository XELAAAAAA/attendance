<?php
	require_once 'admin/connect.php';
	date_default_timezone_set("Asia/Manila");
	$student = $_POST['student'];
	$time = date("H:i");
	$student_no = date("H:i");
	$date = date("Y-m-d");
	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$student'") or die(mysqli_error());
	$f_student = $q_student->fetch_array();
	$student_name = $f_student['firstname']." ".$f_student['lastname'];
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date','$student_no')") or die(mysqli_error());
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";
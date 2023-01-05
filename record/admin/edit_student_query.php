<?php
	session_start();
	include ('connect.php');
	$connection = mysqli_connect('localhost', 'root', '', 'db_sars');

		$image = $_FILES['image']["name"];
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$section = $_POST['section'];

		$query = "UPDATE `student` SET  `image` = '$image', `student_id` = '$student_id', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `course` = '$course', `section` = '$section' WHERE `student_id` ='$student_id'";
		$query_run =  mysqli_query($connection, $query);
		

		if ($query_run) {

		if($image == NULL){

			$_SESSION['success'] = "updated";
			header('Location: student.php');
		
		}else{
			move_uploaded_file($_FILES["image"]['tmp_name'], "upload/". $_FILES["image"]["name"]);

			$_SESSION['success'] = "data updated";
			header('Location: student.php');
		}
		}else {
			$_SESSION['success'] = "data not updated";
			header('Location: student.php');
	}



	
	?>

		
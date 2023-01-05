<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$image = $_FILES['image']['name'];
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$section = $_POST['section'];
		$conn->query("INSERT INTO `student` VALUES('','$image', '$student_id','$firstname', '$middlename', '$lastname', '$course', '$section')") or die(mysqli_error());

		if ($query_run) {

		
		}else{
			move_uploaded_file($_FILES["image"]['tmp_name'], "upload/". $_FILES["image"]["name"]);

			$_SESSION['success'] = "data updated";
			header('Location: student.php');
		}
		}else {
			$_SESSION['success'] = "data not updated";
			header('Location: student.php');
	}
echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "student.php";
				</script>
			';


	?>	
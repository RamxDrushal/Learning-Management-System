<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_id = $_POST['class_id'];

$query = mysqli_query($conn,"select * from student where username='$username' and firstname='$firstname' and lastname='$lastname' and class_id = '$class_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);

$count = mysqli_num_rows($query);
if ($count > 0){
	echo 'false';
}else{
	mysqli_query($conn,"INSERT INTO `student`(`student_id`, `firstname`, `lastname`, `class_id`, `username`, `password`, `location`, `status`) VALUES (NULL,'$firstname','$lastname','$class_id','$password','$username','uploads/NO-IMAGE-AVAILABLE.jpg','Registered')")or die(mysqli_error());
	$query = mysqli_query($conn,"select * from student where username='$username' and firstname='$firstname' and lastname='$lastname' and class_id = '$class_id'")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$id = $row['student_id'];
	$_SESSION['id']=$id;
	echo 'true';
}
?>
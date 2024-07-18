<?php
include('admin/dbcon.php');
$class_id=$_GET["id"];
$studentid=$_GET["studentid"];
$teacherid=$_GET["teacherid"];
mysqli_query($conn,"insert into teacher_class_student (student_id,teacher_class_id,teacher_id) values('$studentid','$class_id','$teacherid') ")or die(mysqli_error());

$query = mysqli_query($conn," SELECT * FROM `teacher_class` WHERE `teacher_id` = '$teacherid' and `teacher_class_id` = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($query)){
$subject_id = $row['subject_id'];
$class_idn = $row['class_id'];
}

$query = mysqli_query($conn," SELECT * FROM `class` WHERE class_id = '$class_idn'")or die(mysqli_error());
while($row = mysqli_fetch_array($query)){
$class_name = $row['class_name'];
}

$query = mysqli_query($conn," SELECT * FROM `subject` WHERE `subject_id` = '$subject_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($query)){
$subject_name = $row['subject_title'];
}

$notification  = 'enrolled'." ".'<b>'.$class_name.'</b>'." ".'<i>'.$subject_name.'</i>'; 

mysqli_query($conn," INSERT INTO `teacher_notification`(`teacher_notification_id`, `teacher_class_id`, `notification`, `date_of_notification`, `link`, `student_id`, `assignment_id`) 
VALUES (NULL,'157','$notification',NOW(),'0','$studentid','0') ")or die(mysqli_error());


?>
<script>
window.location = "dashboard_student.php";
</script>
<?php
?>
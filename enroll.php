<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css"/>
<?php
include('admin/dbcon.php');
$class_id=$_GET["id"];
$studentid=$_GET["studentid"];
$teacherid=$_GET["teacherid"];
$query = mysqli_query($conn,"SELECT * FROM `teacher_class_student` WHERE student_id='$studentid' and  teacher_class_id='$class_id' and teacher_id='$teacherid'")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
	?>
<script>
alert('You Already in the class');
</script>
<script>
window.location = "dashboard_student.php";
</script>
<?php
}
else{
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Enrollment Form</h2>
        <form action="enrolln.php" method="get" class="mt-5">
            <input type="hidden" name="id" value="<?php echo $class_id; ?>">
            <input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
            <input type="hidden" name="teacherid" value="<?php echo $teacherid; ?>">
            <div class="form-group">
                <label for="number">Card Number</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="date">Expiration date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn btn-primary">Make Payment</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
	
}
?>
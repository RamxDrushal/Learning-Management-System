<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $pw = $_POST['pw'];
               $class_id = $_POST['class_id'];

               mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status,password)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Registered','$pw')                                    
		") or die(mysqli_error()); ?>
<?php    ?>
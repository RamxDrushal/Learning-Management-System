<?php 
include('header.php');
include('session.php');
?>
<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <!--/span-->
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Enrollments</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Class ID</th>
                                            <th>Teacher ID</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM teacher_class_student   ") or die(mysqli_error());
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo "
                                            <tr class='gradeX'>
                                                <td>" . $row['student_id'] . "</td>
                                                <td>" . $row['teacher_class_id'] . "</td>
                                                <td>" . $row['teacher_id'] . "</td>
                                                
                                            </tr>
                                            ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
    <?php include('footer.php'); ?>
</body>
</html>
<?php include('header.php'); ?>
<body id="login" style="background-image: url('lms/admin/admin_bak.jpeg.jpeg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form id="login_form" class="form-signin" method="post">
                            <h3 class="form-signin-heading"><i class="icon-lock"></i> Please Login</h3>
                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button name="login" class="btn btn-lg btn-primary btn-block" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <img src="https://www.dematek.se/wp-content/uploads/2018/06/placeholder-man.jpg" alt="Admin" class="admin-pic">
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery("#login_form").submit(function(e){
                    e.preventDefault();
                    var formData = jQuery(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: formData,
                        success: function(html){
                        if(html=='true')
                        {
                            $.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
                            var delay = 2000;
                            setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
                        }
                        else
                        {
                            $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                        }
                        }
                    });
                    return false;
                });
            });
    </script>
</body>
</html>
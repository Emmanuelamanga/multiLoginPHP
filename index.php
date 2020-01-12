<?php
session_start();
include 'project_files/common/alerts.php';
$alert = new alerts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Multi-user-auth</title>
    <!-- links  -->
    <link rel="stylesheet" href="project_files/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="project_files/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="project_files/bootstrap-3.3.7-dist/css/style.css">
</head>
<body>
<div class="container" id="container">
<div class="row" id='#r1'>
  <div class="col-md-4"></div>
     <div class="col-md-4">
        <div class="panel panel-default">
           <div class="panel-heading">
                    <h1 class="panel-title">Welcome to multi-user authentication system<br> <small>prove your authorization</small></h1>
            </div>
            <?php if (isset($_SESSION['alert'])) {
                    print_r($alert->message($_SESSION['alert'][0],$_SESSION['alert'][1]));
            } ;?>
            <div class="panel-body">
                <!-- <h5 class="card-title ">Kindly log in to access our services.</h5> -->
                
                    <form method="POST" action="project_files/login.php" class="form-horizontal">
                        <div class="form-group">
                            <label for="userName"  class="col-sm-3 control-label">Username:</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="userName" id="userName" aria-describedby="userNamelHelp" placeholder="Enter your Username" required autocomplete="off">
                            <!-- <small id="userNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1" class="col-sm-3 control-label">Password:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="InputPassword1" name="userPassword" aria-describedby="passwordlHelp" placeholder="Password" required autocomplete="off">  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> Remember me
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name='submit' class="btn btn-primary">Sign in</button>
                        </div>
                       
                    </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
  </div>
</div>
<?php session_destroy(); ?>
<!-- script  -->
<script src="project_files/bootstrap-3.3.7-dist/js/jquery-1.12.4.min.js"></script>
<script src="project_files/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){ 
    
});

</script>

</body>
</html>
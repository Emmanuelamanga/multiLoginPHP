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
</head>
<body>
<div class="container" id="container">
    
        <div class="panel">
           
           <div class="panel-heading">Welcome to multi-user authentication system</div>
            <?php if (isset($_SESSION['alert'])) {
                    print_r($alert->message($_SESSION['alert'][0],$_SESSION['alert'][1]));
            } ;?>
            <div class="panel-body">
                <!-- <h5 class="card-title ">Kindly log in to access our services.</h5> -->
                
                    <form method="POST" action="project_files/login.php">
                        <div class="form-group">
                            <label for="userName">Username:</label>
                            <input type="text" class="form-control" name="userName" id="userName" aria-describedby="userNamelHelp" placeholder="Enter your Username" required autocomplete="off">
                            <!-- <small id="userNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" name="userPassword" aria-describedby="passwordlHelp" placeholder="Password" required autocomplete="off">
                            <!-- <small id="passwordHelp" class="form-text text-muted">Your password is safe with us.</small> -->
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                       <button type="submit" name="submit" class="btn btn-primary" id="tbn" >Submit</button>
                    </form>

            </div>
        </div>
        
    </div>
    <div class="col " id="col#2">
      
    </div>
  </div>
</div>

<!-- script  -->
<script src="project_files/bootstrap-3.3.7-dist/js/jquery-1.12.4.min.js"></script>
<script src="project_files/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){ 
    
});

</script>

</body>
</html>
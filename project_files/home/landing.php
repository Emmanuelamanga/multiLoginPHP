
<?php
// start session
    session_start();
    // authenticate the page visitor
    if(!isset($_SESSION['logon_user'])){
        // redirect back to login with a message
        $_SESSION['alert'] = [
            'info', 
            'Kindly log in to access our services'
        ];
    header('location: ../../index.php');
    }else{
        //user
        print_r($_SESSION['logon_user']);
        echo '<br>';
       // assign roles 
         print_r($_SESSION['user_rights']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- links to stylesheets  -->
    <?php 
        include '../common/links.php'; 
     ?>
</head>
<body>
    <div class="container-fluid">
        <div style="margin: auto; width:40%;padding-top:10px;">
            <?php 
                include '../common/nav.php'; 
            ?>
        </div>
         
     <div class="container">
         <!-- here -->
     </div>
    </div>
   
   
    <!-- link to scripts -->
    <?php 
        include '../common/scripts.php'; 
     ?>
</body>
</html>
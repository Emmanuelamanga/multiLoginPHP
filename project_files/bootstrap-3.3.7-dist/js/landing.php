
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
       // assign roles 
        print_r($_SESSION['logon_user']);
    }
    

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
        include '../common/links.php'; 
    ?>
</head>
<body>
    here
</body>
</html>
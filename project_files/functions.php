<?php

class db_functions{
    // variable declaration and initialization
    public $db_conn;

   public function connect_db(){
        $host="127.0.0.1";
        $port=3306;
        $socket="";
        $user="root";
        $password="";
        $dbname="multiuserauth";

        $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);
        
        // Check connection
        if ($conn->connect_error) {
            return ("Could not connect to the database server: " . $conn->connect_error);
        }else{
            return $conn;
        }
    
   }
        
    public function login_user($con, $user_name, $user_pass){
        echo ($user_name.' '. $user_pass).'<BR>';

        $sql = "SELECT usr_id FROM users_view WHERE usr_name='$user_name' AND usr_pass='$user_pass'";
        $result = $con->query($sql);

        if ($row = $result->fetch_assoc()) { 
            // update the logs

             $row['usr_id'];
            // set auth session to the role id and user session to user id
            $_SESSION['login_user'] = 
            // redirect user to the landing page
            header('location: home/landing.php');
        }else{
           
               echo 'username or password is incorrect';
               
              
        }
        
    }
}
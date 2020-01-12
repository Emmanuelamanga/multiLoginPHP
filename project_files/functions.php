<?php
session_start();
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
        // echo ($user_name.' '. $user_pass).'<BR>';

        $sql = "SELECT usr_id, usr_status, roles_role_id, usr_name FROM users_view WHERE usr_name='$user_name' AND usr_pass='$user_pass'";
        $result = $con->query($sql);

        // confirm the user 
        if ($row = $result->fetch_assoc()) { 
            // update the logs
                // check if the user is authenticated
                if($row['usr_status'] == 1 && $row['roles_role_id'] == 1){
                    // authenticated got to landing page
                      // set auth session to the role id and user session to user id

                    $_SESSION['logon_user'] = [
                                                'user_id'=>$row['usr_id'],
                                                'user_name'=>$row['usr_name'], 
                                                'role_id'=> $row['roles_role_id'] 
                                            ];
                    // redirect user to the landing page
                    header('location: home/landing.php');
                }else{
                    // blocked by admin
                    // redirect back to the login page with a message
                   
                    // header('location: home/landing.php');
                }           
          
        }else{

           $_SESSION['alert'] = ['warning', 'username or password is incorrect'];

            header('location: ../index.php');
            
               
              
        }
        
    }
}
?>

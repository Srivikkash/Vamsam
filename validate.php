<?php  
    include "db.php";
    if(isset($_POST["submit"])){  
            $user=$_POST['uname'];  
            $pass=$_POST['pwd'];  

            $dbQuery = "SELECT userid FROM users WHERE uname='$user' AND pwd='$pass';";
        
            $query=mysqli_query($conn, $dbQuery);
            $numrows=mysqli_fetch_assoc($query); 
            if(isset($numrows['userid'])!=null){
            if($numrows['userid']=='u01') {  
                session_start();  
                $_SESSION['sess_user']=$user; 
                header("Location: Admin/home.php?user=$user");  
            }  
        }
        else {  
            
      echo "<script type='text/javascript'>alert('Invalid User')</script>"; 
      header("Location: login.php");
        }
        } 
?>               
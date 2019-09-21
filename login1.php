<?php
//session_start();
include ('conn_file.php');
 if(isset($_POST['Login']))
    {
//username and password
 $username=$_POST['Name']; 
 $password=$_POST['Password']; 
			  
//admin Login
// $_SESSION['username']=$username;// session Email

$sqlp1="SELECT * FROM user_details WHERE Name='$username' and Password='$password'";

        
           $resultp1=mysqli_query($conn,$sqlp1);
            $count1=mysqli_num_rows($resultp1);
     
   //  echo $count1;
              if($count1>0)
              {
                  $id=mysqli_fetch_assoc($resultp1);
                  if($id)
                  {
                    session_start();
                    $_SESSION["USER_NAME"]=$id['Name'];
                 header("Location: search.php");// to user homepage
                  }
                  else
                  {
                      echo mysqli_error($conn);
                  }
              }
              else
                 {
          
                   echo "<script language=\"JavaScript\">\n";
                   echo "alert('Invalid Username or password');\n";
                   echo "window.location='login.php'";
                   echo "</script>";
                 }
 }

?>

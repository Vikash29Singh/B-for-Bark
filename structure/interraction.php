<?php 
//echo "HELLO";    
    include 'conn_file.php';
//echo "HELLO";

    if(isset($_POST['Sub']))
    {
        $Pass=$_POST['Password'];
        $Name=$_POST['Name'];
        $Phone=$_POST['Phone'];
        $Street=$_POST['Street'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        
  //      echo "HELLO";
    //    echo $Pass;
      //  echo $Phone;
        //echo $City;
        
        $qry="insert into user_details (Password,Name,Phone,Street,City,State) values('$Pass','$Name','$Phone','$Street','$City','$State')";
            
        $ret=mysqli_query($conn,$qry);
        
        if($ret)
        {
            echo "SUCCESSFULL CREATION";
        //    header("gallery.php"); 
          //  exit;
        }
        else
        {
            die("ERROR ".mysqli_error($conn));
        }
        
        
    }


        if(isset($_POST['user_verify']))
        {
            
            $name=$_POST['Name'];
            $pass=$_POST['Password'];
            
            $qry2="select * from user_details where Name='$name'
                    and Password='$pass'";
            $ret2=mysqli_query($conn,$qry2);
            
            if($ret2)
            {
                $row=mysqli_fetch_assoc($ret2);
                if($row > 0)
                {
                    echo "USER FOUND";
                }
                else
                {
                    echo "NO USER FOUND";
                }
            }
            else
            {
                echo "error".mysqli_error($conn);
            }
        }


?>
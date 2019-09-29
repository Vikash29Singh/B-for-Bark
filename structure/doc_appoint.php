<!DOCTYPE html>
<html>
<?php include 'conn_file.php';
    session_start();
    ?>


<head>
    
    </head>
    
    <body>
        
        <?php
        /*$docid=$_POST['USER_ID'];*/
        $docid=1;
        
        $qry="select * from doc_appointment where Doc_Id='$docid'";
        $rn=mysqli_query($conn,$qry);
        $i=0;
        while($row=mysqli_fetch_assoc($rn))
        {
            $pid=$row['P_Id'];
            $pida[$i]=$row['P_Id']; //taken an array to store all the id's so that one can display the healthcard accordingly.
            echo $row['P_Id'];
            $qry2="Select * from pet_details where P_Id='$pid'";
            $rn2=mysqli_query($conn,$qry2);
            $ans=mysqli_fetch_assoc($rn2);
            echo $ans['Name'];  //all the pets for whom appointment is taken will be displayed here
            $i=$i+1;
            
        }
        
        
        
        ?>
    
    </body>
    
    
</html>
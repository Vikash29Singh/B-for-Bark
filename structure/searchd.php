<html>

<?php  include "conn_file.php"  ?>
    
<head>
    
    
    </head>

    <style>
    
    
    </style>
    
    <body>
    
        <?php
            $dname="common cold";
                $qry1="select * from disease_details where Disease_Name='$dname'";
                $q=mysqli_query($conn,$qry1);
        $dis=mysqli_fetch_assoc($q);
        $did=$dis['Diseas_Id'];
    
    
    $qrecom="insert into d_search ('U_Id','Disease_Id') values ('$_SESSION['USER_NAME']','$did')";
    
    $rrecom=mysqli_query($conn,$qrecom);
    
    
    
    
    
    $qry2="select * from symptoms where Disease_Id='$did'";
                $q2=mysqli_query($conn,$qry2);
       
    
     
    $qry3="select * from remedies where Disease_Name='$dname'";
                $q3=mysqli_query($conn,$qry3);
       
    ?>
        
        <h1><?php echo $dis['Disease_name'] ?></h1>
        <h2>
            <?php echo $dis['Disease_description'] ?>
        </h2>
        <br>
        
        <h2>
            <u>SYMPTOMS</u>
        </h2>
        
        <?php
        $i=1;
        while ($row1 = mysqli_fetch_assoc($q2)) 
                    {
                        echo $i.$row1["Symptoms"];
                        $i=$i+1;
                        ?><br><?php
                    }
        ?>
        <marquee scrollamount="16" bgcolor="green"><span style="color:blue"><font size="13">This is OUR HELP</font></span></marquee>
        
        <h2><u>REMEDIES</u></h2>
        <?php
        $i=1;
        while ($row2 = mysqli_fetch_assoc($q3)) 
                    {
                        echo $i.$row2["Remedies"];
                        $i=$i+1;
                        ?><br><?php
                    }
        ?>
        
        <!--<table border="3">
        <tr rowspace="2">
            <th>DOCTORS AVAILABLE</th>
        </tr>
            
            <tr></tr>
        
        doctors available part would be dynamic and we need to work on it with a;; the API's then we can edit or create this part, do the rest for now
        </table>-->
        
        
    
    
    </body>



</html>




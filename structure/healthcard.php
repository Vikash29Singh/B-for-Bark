<html>
<?php include 'conn_file.php';  ?>
<head>
    
    
    </head>

    <style>
    
        .hcard
        {
            border: 10px;
            position:relative;
            color: aquamarine;
            width: 60%;
            left: 20%;
            align-self: center;
            align-content: center;
            border-width: thick;
            border-color: black;
            height: 70%;
            background-color: darkcyan;
        }
    
        
    </style>
    
    <body>
        <?php
        $pid=23;
        $qry="select * from pet_details where P_Id='$pid'";
        $rn=mysqli_query($conn,$qry);
        $presult=mysqli_fetch_assoc($rn);
        
        $qry2="select * from pet_medic where P_Id='$pid'";
        $rn2=mysqli_query($conn,$qry2);
        //$presult2=mysqli_fetch_assoc($rn2);
        
        $qry3="select * from pet_allergies where P_Id='$pid'";
        $rn3=mysqli_query($conn,$qry3);
        //$presult3=mysqli_fetch_assoc($rn3);
        
        ?>
        
        <table class="hcard" border="5px">
            
            <tr>
            <td>NAME</td>
                <td><?php echo $presult['Name'] ?></td>
            </tr>
            <tr>
            <td>BREED</td>
                <td><?php echo $presult['Breed'] ?></td>
            </tr>
            <tr>
            <td>WEIGHT</td>
                <td><?php echo $presult['Weight'] ?></td>
            </tr>
            <tr>
            <td>AGE</td>
                <td><?php echo $presult['Age'] ?></td>
            </tr>
            <tr>
            <td>BLOOD GROUP</td>
                <td><?php echo $presult['Blood_group'] ?></td>
            </tr>
            <tr>
            <td>ALLERGIES</td>
                <td><?php 
                    while ($row1 = mysqli_fetch_assoc($rn3)) 
                    {
                        echo $row1["Allergies"]." ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
            <td>MEDICATION</td>
                <td>
                    <?php 
                    while ($row = mysqli_fetch_assoc($rn2)) 
                    {
                        echo $row["Medication"]." ";
                    }
                    ?>
                </td>
            </tr>
            
            
            
        </table>
    
    
    </body>
</html>
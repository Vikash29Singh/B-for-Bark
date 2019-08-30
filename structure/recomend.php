<html>
<?php include("conn_file.php"); ?>

<head>
    
    
    </head>

    
    <body>
    
        <?php
            $qry="SELECT TOP 1 FROM  ( SELECT Disease_Id, COUNT(Disease_Id) as "DiseaseCount" FROM d_search GROUP BY Disease_Id ORDER BY "DiseaseCount" DESC )";
        
            $ret=mysqli_query($conn,$qry);
            $my=mysqli_fetch_assoc($ret);
        ?>
    
    </body>



</html>
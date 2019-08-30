<html>
<?php include("conn_file.php"); ?>

<head>
    
    
    </head>

    
    <body>
    
        <?php
        
            $qry2="SELECT Disease_Id FROM d_search GROUP BY Disease_Id ORDER BY COUNT(Disease_Id) DESC LIMIT 2";
        
            $ret=mysqli_query($conn,$qry2);
            //$my=mysqli_fetch_assoc($ret);
            
        while (  $row =  mysqli_fetch_assoc($ret)    )
            {
                foreach ($row as $row)
                {
                    echo $row." ";
                }
            }
      ?>
        
            
        
        
    
    </body>



</html>
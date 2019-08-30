<html>
<?php include("conn_file.php"); ?>

<head>
    
    
    </head>

    
    <body>
    
        <?php
        
            $qry2="SELECT COUNT(Disease_Id) FROM d_search GROUP BY Disease_Id ORDER BY COUNT(Disease_Id) DESC LIMIT 3";
        
            $ret=mysqli_query($conn,$qry2);
            //$my=mysqli_fetch_assoc($ret);
            
        while (  $row =  mysqli_fetch_assoc($ret)    )
            {
                /*$projects[] = $row;*/
            
                //echo $row[0];
            
                //echo $row['Disease_Id'];
                foreach ($row as $row)
                {
                    echo $row;
                }
            }
      ?>
        
            
        
        
    
    </body>



</html>
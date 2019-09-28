<html>
<?php include("conn_file.php"); ?>

<head>
    
    </head>

    
    <body>
    
        <?php
        
            //$qry2="SELECT Disease_ID FROM d_search GROUP BY Disease_Id ORDER BY COUNT(Disease_Id) DESC LIMIT 2";
            
            $fetch1 = "SELECT * FROM d_search, disease_details WHERE d_search.Disease_Id = disease_details.Disease_Id GROUP BY d_search.Disease_Id ORDER BY COUNT(d_search.Disease_Id) DESC LIMIT 2";
                    $result = mysqli_query($conn,$fetch1);
                    
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                    echo "<tr>";
                    echo "<br>";
                    echo "<td>" . $row['Disease_name'] . "</td>";
                    echo "<br>";
                    echo "<td>" . $row['Disease_type'] . "</td>";
                    echo "<br>";
                    echo "<td>" . $row['Disease_description'] . "</td>";
                    echo "<br";
                    //echo "<td>" . $row['Breed'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
            
            //$ret=mysqli_query($conn,$qry2);
            //$my=mysqli_fetch_assoc($ret);
            
      /*  while ($row = mysqli_fetch_assoc($ret))
            {
                foreach ($row as $row)
                {
                    echo $row." ";
                }
            }*/
      ?>
        
    </body>

</html>
<?php
session_start();
include("conn_file.php");


#------------------------------------------------------------------------------------------------------------------------------
//$u_email=$_SESSION['email'];// session Email
//$u_email=$_SESSION['email'];// session Email


if(!isset($_SESSION['USER_NAME'])) 
	 header("Location: login.php"); 
else{
	$user=$_SESSION['USER_NAME'];
}
#-----------------------------------------------------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiple Symptoms</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">




    </script>

    <style>
        .big text {
            font-size: 52px;
            margin: 20px 0;
            color: darkorange;
        }

        a.btn {
            margin: 30px 10px;
            width: 200px;
            padding: 5px;
            border-radius: 10px;
        }

        a.btn-first {
            background-color: darkorange;
            color: #fff;


        }

        a.btn-second {
            background: transparent;
            color: 1px solid white;
            color: #333;
        }

        a.btn:hover {
            background: darkorange;
            border: none;
            color: #fff;
            box-shadow: 5px 5px 10px #999;
            transition: 0.3s;

        }

        .banner-info,
        .banner-image {
            margin: 30px 0;
        }

    </style>
    <script>
        function abc(event) {
            event.preventDefault();
            var href = event.currentTarget.getAttribute('href')
            window.location = 'https://www.petmd.com/dog/conditions/skin/c_dg_acne' + href;
        }

    </script>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->

    <!--        navigation-->
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="index.php"><img src="img/abc_new.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--            <a class="navbar-brand" href="">Hey <span style="color:#1ebba3;"> <?php echo $user; ?> Welcome,,,,, Back</span> How is your <span style="color:#1ebba3;">Pet</span></a>-->
            <a class="navbar-brand" href="">Hey <span style="color:#1ebba3;"> <?php echo $_SESSION["USER_NAME"]; ?> Welcome Back</span> How is your <span style="color:#1ebba3;">Pet</span></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Home</a>
                    </li>
                    <li>
                    <li class="nav-item">
                        <a class="nav-link" href="/B-for-Bark/Table/table.php">Health card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="petregister.php">Pet-Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resources">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Quotes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contacts</a>
                        </li>
-->
    <!--
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
-->
    <!--
                        <li class="nav-item">
                            <a class="nav-link" href="UserRegistration.php">Sign-up</a>
                        </li>
-->
    <!--
                    </ul>
                </div>
            </nav>
        </div>
-->
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 banner-info">
                <h1>Disease Expected</h1><br><br>
                <p class="lead">Here you get all the Details Related to Pet's Disease</p>
                <p>Know All the Details related to pet and also view the Disease Description and Remedies if needed</p>
                <?php
        
            //$qry2="SELECT Disease_ID FROM d_search GROUP BY Disease_Id ORDER BY COUNT(Disease_Id) DESC LIMIT 2";
            
            if(isset($_POST['symp']))
       {
          $sy=explode(",",$_POST['symp']);
           
               
               if(($n=sizeof($sy)==1))
                  {
               $q1="select * from disease_details,symptoms where disease_details.Disease_Id = symptoms.Disease_Id and symptoms.Symptoms='$sy[0]'";
                $a=mysqli_query($conn,$q1);
                      //$dname=mysqli_fetch_array($a1);
                  }
                  
                  else if(($n=sizeof($sy)==2))
                          {
                $q2="select * from disease_details,symptoms where disease_details.Disease_Id = symptoms.Disease_Id and symptoms.Symptoms in ('$sy[0]', '$sy[1]')";
                $a=mysqli_query($conn,$q2);
                     // $dname=mysqli_fetch_array($a2);
                          }
                          
                    else if(($n=sizeof($sy)==3))
                            {
                $q3="select * from disease_details,symptoms where disease_details.Disease_Id = symptoms.Disease_Id and symptoms.Symptoms in ('$sy[0]', '$sy[1]','$sy[2]')";
                $a=mysqli_query($conn,$q3);
                      //$dname=mysqli_fetch_array($a3);
                            }
                            
                    else
                            {
                $q4="select * from disease_details,symptoms where disease_details.Disease_Id = symptoms.Disease_Id and symptoms.Symptoms in ('$sy[0]', '$sy[1]','$sy[2]','$sy[3]')";
                $a=mysqli_query($conn,$q4);
                      //$dname=mysqli_fetch_array($a3);
                            }
               
           while($row=mysqli_fetch_assoc($a))
                            {
                                echo $id1=$row['Disease_name'];
               echo "<br>";
                              echo $row['Disease_type'];
               echo "<br>";
               
               echo $row['Disease_description'];
               echo "<br>";
               
               ?>



                <a class="btn btn-secondary btn-md" onclick='abc(event);' id="first" href="http://www.google.com" target="_blank">Know More
                </a><br>



                <?php                    }
                
           
         
       }
    
    
    
    
            
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








            </div>
            <div class="col-sm-6 banner-image">
                <img src="img/12.jpg" height="500px" width="500px" class="img-responsive">

            </div>
        </div>
    </div>
</body>

</html>

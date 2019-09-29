<?php
session_start();
include("conn_file.php");


#------------------------------------------------------------------------------------------------------------------------------
//$u_email=$_SESSION['email'];// session Email
//$u_email=$_SESSION['email'];// session Email


if(!isset($_SESSION['USER_ID'])) 
	 header("Location: doctorlogin.php"); 
else{
	$user=$_SESSION['USER_ID'];
}
#-----------------------------------------------------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

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
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->

    <!--        navigation-->
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="index.php"><img src="img/abc_new.png"></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--                WELCOME TO DOCTOR INFO</a>-->

            <a class="navbar-brand" href="">Hey Doctor <span style="color:#1ebba3;"> <?php
                    $d = "Select Doc_name from doctor_details where Doc_Id ='$user' ";
                    $result1 = mysqli_query($conn,$d);
                    $rows = mysqli_fetch_assoc($result1);
                    echo $rows['Doc_name']; echo"!";?> Welcome Back</span> Ready to care for <span style="color:#1ebba3;">Pet</span></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.php">Home</a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <!--
                        <li class="nav-item">
                            <a class="nav-link" href="UserRegistration.php">Sign-up</a>
                        </li>
-->
                </ul>
            </div>
        </nav>
    </div>
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 banner-info">
                <h1>Doctor Info</h1><br><br>
                <p class="lead">Here you get all the Details Related to Pets</p>
                <p>Know All the Details related to pet and also view the health card of the pet if needed</p>
                <a class="btn btn-secondary btn-lg" href="#appointments" target="_blank">Appointments</a>
                <!--                   <a class="btn btn-secondary btn-md" href="" target="_blank">Health Card</a>-->
            </div>
            <div class="col-sm-6 banner-image">
                <img src="img/doctor.jpg" height="490px" width="700px" class="img-responsive">

            </div>
        </div>
        <br>
        <br>
        <br>
       
    </div>
    <div class="container" id="appointments">
        <table>
            <tr>
                <th>Sl No</th>
                <th>Pet Name</th>
                <th>Health Card</th>
            </tr>
        <form action="table.php" method="post">
        
         <?php
        $docid=$_SESSION['USER_ID'];
        
        
        $qry="select * from doc_appointment where Doc_Id='$docid'";
        $rn=mysqli_query($conn,$qry);
        $i=0;
            $size=mysqli_num_rows($rn);
        while($row=mysqli_fetch_assoc($rn))
        {
            $pid=$row['P_Id'];
            $pida[$i]=$row['P_Id']; //taken an array to store all the id's so that one can display the healthcard accordingly.
            //echo $row['P_Id'];
            $qry2="Select * from pet_details where P_Id='$pid'";
            $rn2=mysqli_query($conn,$qry2);
            $ans=mysqli_fetch_assoc($rn2);
            //echo $ans['Name'];  //all the pets for whom appointment is taken will be displayed here
            
       
              ?>
        
        
        
        
        
        <?php
            
            if($size==1)
            {
            ?>
        
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="1">HEALTH CARD</button> </td>
            </tr>
            <?php
            }
            
            
            else if($size == 2)
            {
            ?>
            
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="1">HEALTH CARD</button> </td>
            </tr>
            <?php $i=$i+1; ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="2">HEALTH CARD</button> </td>
            </tr>
            <?php
            }
            else if($size == 3)
            {
            ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="1">HEALTH CARD</button> </td>
            </tr>
            <?php $i=$i+1; ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="2">HEALTH CARD</button> </td>
            </tr>
            <tr>
                <?php $i=$i+1; ?>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="3">HEALTH CARD</button> </td>
            </tr>
            
            
            <?php
            }
                else 
                {
                ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="1">HEALTH CARD</button> </td>
            </tr>
            <?php $i=$i+1; ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="2">HEALTH CARD</button> </td>
            </tr>
            <?php $i=$i+1; ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="3">HEALTH CARD</button> </td>
            </tr>
            <?php $i=$i+1; ?>
            <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $ans['Name']; ?></td>
                <td><input type="text" value="<?php '$pida[$i]' ?>" hidden="hidden"><button type="submit" name="4">HEALTH CARD</button> </td>
            </tr>
            <!--<tr>
                <td>2</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td></td>
                <td></td>
            </tr>
             <tr>
                <td>5</td>
                <td></td>
                <td></td>
            </tr>
             <tr>
                <td>6</td>
                <td></td>
                <td></td>
            </tr>-->
            
        
            </form>
            </table>
        <?php
                  
             }
        }
        ?>
    </div>
    <br>
    <br>
    <br>
      <div id="contacts" class="offset">
        <footer>
            <div class="row justify-content-center">
             <hr class="socket">
                &copy;B for Bark.
            </div>
        </footer>
    </div>

</body>
</html>

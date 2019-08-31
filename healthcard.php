<html>
<?php include 'conn_file.php';  
    
session_start();
    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Health card</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;

        }

        .login-box {
            width: 300px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;

        }

        .login-box h1 {
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #1ebba3;
            margin-bottom: 50px;
            padding: 13px 0;
            border-radius: 2px;
        }

        .textbox {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #1ebba3;
        }

        .textbox i {
            width: 60px;
            float: left;
            text-align: center;
        }

        .textbox input {
            border: none;
            outline: none;
            background: none;
            color: black;
            font-size: 18px;
            width: 150px;
            float: left;
            margin: 0 10px;
        }

        .btn {
            width: 100%;
            background: none;
            border: 2px solid #1ebba3;
            color: black;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }

        .bg {
            background: url('img/5.jpg') norepeat;
            width: 100%;
            height: 100vh;
        }

        .hcard {
            padding: 50px 60px;
            border: 10px;
            position: relative;
            color:white;
            width: 60%;
            left: 20%;
            align-self: center;
            align-content: center;
            border-width: thick;
            border-color:black;
            height: 70%;
            background-color:#1ebba3;
            margin-top: 20vh;
            -webkit-box-shadow: 3px 3px 22px 12px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 3px 3px 22px 12px rgba(0, 0, 0, 0.75);
            box-shadow: 3px 3px 22px 12px rgba(0, 0, 0, 0.75);
        }

    </style>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="index.php">Welcome to B for Bark</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Home</a>
                    </li>
                    <!-- <li>
            <li class="nav-item">
              <a class= "nav-link" href="#">Pets</a>
            </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="healthcard.php">Health card</a>
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

    <div class="container-fluid bg">

        <table class="hcard" border="5px">

            <th colspan="2">
                <center>Pet Healthcard</center>
            </th>
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
    </div>
</body>

</html>

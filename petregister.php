<!--
 File name:B for bark
 Date:21/6/19
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include 'conn_file.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disease Recognition System</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background-image: url("img/10.jpg");
            max-width: 100%;
            max-height: 100%;
        }

        .login-box {
            width: 500px;
            position: absolute;
            background-color: white;
            opacity: 0.8;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;

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
            width: 100px;
            float: left;
            text-align: center;
        }

        .textbox input {
            border: none;
            outline: none;
            background: none;
            color: black;
            font-size: 18px;
            width: 400px;
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

    </style>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="index.php"><img src="img/abc_new.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--            <a class="navbar-brand" href="">Hey <span style="color:#1ebba3;"> Welcome Back</span> How is your <span style="color:#1ebba3;">Pet</span></a>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Home</a>
                    </li>
                    <li>
<!--
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
-->
                    <li class="nav-item">
                        <a class="nav-link" href="petregister.php">Pet-Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <!-- end vavigation-->


    <div class="col-12 narrow text-center login-box">
        <form action="search.php" method="post">
            <h1>Pet Registration</h1>
            <div class="textbox">
                <!--        <i class="fas fa-user fa-3x " aria-hidden="true"></i>-->
                <input type="text" placeholder="Pet Name" name="Pname" pattern="[A-Za-z]{,20}" title="Name cannot contain numbers or special characters." required value="">
            </div>

            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="text" placeholder="Breed" name="Pbreed" pattern="[A-Za-z]{,20}" title="Breed cannot contain numbers or special characters." required value="">
            </div>
            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="number" placeholder="Age" name="Page" title="Age cannot contain alphabets or special characters." required value="">
            </div>
            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="number" placeholder="Weight" name="Pweight" title="Weight cannot contain alphabets or special characters." required value="">
            </div>
            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="text" placeholder="Blood-Group" name="Pbgroup" maxlength="3" pattern="([AaBbOo]|[Aa][Bb])[\+-]" title="Bloog Group can have A+, A-, B+, B-, O+, O-" required value="">
            </div>
            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="text" placeholder="Allergies(seperate by ',')" name="Pallergies" required value="">
            </div>
            <div class="textbox">
                <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                <input type="text" placeholder="Medication(Seperate by',')" name="Pmedication" required value="">
            </div>


            <button class="btn btn-secondary btn-md" href="" target="_blank" name="Pregister">Register</button>
        </form>

        <?php
    /*
    if(isset($_POST['Pregister']))
    {
        $pname=$_POST['Pname'];
        $pbreed=$_POST['Pbreed'];
        $page=$_POST['Page'];
        $pweight=$_POST['Pweight'];
        $pbgroup=$_POST['Pbgroup'];
        $pallergies=$_POST['Pallergies'];
        $pmedication=$_POST['Pmedication'];
        
        $qry="insert into pet_details(Name,Breed,Blood_Group,Age,weight) values ('$pname','$pbreed','$pbgroup','$page','$pweight')";
        $rn=mysqli_query($conn,$qry);
        
        if($rn)
        {
            $qry1="Select * from pet_details where Name='$pname' and Weight='$pweight'";
            $rn1=mysqli_query($conn,$qry1);
            $row=mysqli_fetch_assoc($rn1);
            $id=$row['P_Id'];
           // echo $id;
            $allergies=explode(",",$pallergies);
            $i=0;
            for($i=0;$i<sizeof($allergies);$i++)
            {
              //  echo $allergies[$i];
                $o=$allergies[$i];
                $qry101="insert into pet_allergies values('$id','$o')";
                $r=mysqli_query($conn,$qry101);
            }
            
            $medication=explode(",",$pmedication);
            $i=0;
            for($i=0;$i<sizeof($medication);$i++)
            {
                $qry102="insert into pet_medic values('$id','$medication[$i]')";
                $r=mysqli_query($conn,$qry102);
            }
            echo "Pet successfully Registered";
        }
        
        else
        {
            echo "ERROR ".mysqli_error($conn);
        }
        
    }
    */
    ?>
    </div>

</body>

</html>

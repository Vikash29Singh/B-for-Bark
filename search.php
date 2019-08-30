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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disease Recognition System</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />

    <style>
        @import url("https://fonts.googleapis.com/css?family=Inconsolata:700");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background: ;
        }

        .container {
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 300px;
            height: 100px;
        }

        .container .search {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 80px;
            background: #1ebba3;
            border-radius: 50%;
            transition: all 1s;
            z-index: 4;
            box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
        }

        .container .search:hover {
            cursor: pointer;
        }

        .container .search::before {
            content: "";
            position: absolute;
            margin: auto;
            top: 22px;
            right: 0;
            bottom: 0;
            left: 22px;
            width: 12px;
            height: 2px;
            background: white;
            transform: rotate(45deg);
            transition: all .5s;
        }

        .container .search::after {
            content: "";
            position: absolute;
            margin: auto;
            top: -5px;
            right: 0;
            bottom: 0;
            left: -5px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 2px solid white;
            transition: all .5s;
        }

        .container input {
            font-family: 'Inconsolata', monospace;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 50px;
            outline: none;
            border: none;
            background: #1ebba3;
            color: white;
            text-shadow: 0 0 10px #1ebba3;
            padding: 0 80px 0 20px;
            border-radius: 30px;
            box-shadow: 0 0 25px 0 #1ebba3, 0 20px 25px 0 rgba(0, 0, 0, 0.2);
            transition: all 1s;
            opacity: 0;
            z-index: 5;
            font-weight: bolder;
            letter-spacing: 0.1em;
        }

        .container input:hover {
            cursor: pointer;
        }

        .container input:focus {
            width: 300px;
            opacity: 1;
            cursor: text;
        }

        .container input:focus~.search {
            right: -250px;
            background: #151515;
            z-index: 6;
        }

        .container input:focus~.search::before {
            top: 0;
            left: 0;
            width: 25px;
        }

        .container input:focus~.search::after {
            top: 0;
            left: 0;
            width: 25px;
            height: 2px;
            border: none;
            background: white;
            border-radius: 0%;
            transform: rotate(-45deg);
        }

        .container input::placeholder {
            color: white;
            opacity: 0.5;
            font-weight: bolder;
        }

        /*        second search bar*/
        .container1 {
            position: absolute;
            margin: auto;
            top: 25px;
            left: 0;
            right: 0;
            bottom: -300px;
            width: 300px;
            height: 100px;
        }

        .container1 .search {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 80px;
            background: #1ebba3;
            border-radius: 50%;
            transition: all 1s;
            z-index: 4;
            box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
        }

        .container1 .search:hover {
            cursor: pointer;
        }

        .container1 .search::before {
            content: "";
            position: absolute;
            margin: auto;
            top: 22px;
            right: 0;
            bottom: 0;
            left: 22px;
            width: 12px;
            height: 2px;
            background: white;
            transform: rotate(45deg);
            transition: all .5s;
        }

        .container1 .search::after {
            content: "";
            position: absolute;
            margin: auto;
            top: -5px;
            right: 0;
            bottom: 0;
            left: -5px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 2px solid white;
            transition: all .5s;
        }

        .container1 input {
            font-family: 'Inconsolata', monospace;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 50px;
            outline: none;
            border: none;
            background: #1ebba3;
            color: white;
            text-shadow: 0 0 10px #1ebba3;
            padding: 0 80px 0 20px;
            border-radius: 30px;
            box-shadow: 0 0 25px 0 #1ebba3, 0 20px 25px 0 rgba(0, 0, 0, 0.2);
            transition: all 1s;
            opacity: 0;
            z-index: 5;
            font-weight: bolder;
            letter-spacing: 0.1em;
        }

        .container1 input:hover {
            cursor: pointer;
        }

        .container1 input:focus {
            width: 300px;
            opacity: 1;
            cursor: text;
        }

        .container1 input:focus~.search {
            right: -250px;
            background: #151515;
            z-index: 6;
        }

        .container1 input:focus~.search::before {
            top: 0;
            left: 0;
            width: 25px;
        }

        .container1 input:focus~.search::after {
            top: 0;
            left: 0;
            width: 25px;
            height: 2px;
            border: none;
            background: white;
            border-radius: 0%;
            transform: rotate(-45deg);
        }

        .container1 input::placeholder {
            color: white;
            opacity: 0.5;
            font-weight: bolder;
        }


        /*
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 50%;
        }

        .dis {
            color: white;

        }

        .sym {
            color: white;

        }
*/

    </style>
    <script>
        window.console = window.console || function(t) {};

    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }

    </script>
</head>
<?php

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
    
    ?>


<?php    
//if(isset($_POST['Login']))
//        {
//            
//            $name=$_POST['Name'];
//            $pass=$_POST['Password'];
//            
//            $qry2="select * from user_details where Name='$name'
//                    and Password='$pass'";
//            $ret2=mysqli_query($conn,$qry2);
//            
//            if($ret2)
//            {
//                $row=mysqli_fetch_assoc($ret2);
//                if($row > 0)
//                {
//                    echo "USER FOUND";
//                }
//                else
//                {
//                    echo "NO USER FOUND";
//                }
//            }
//            else
//            {
//                echo "error".mysqli_error($conn);
//            }
//        }
            
?>



<body data-spy="scroll" data-target="#navbarResponsive" translate="no">
    <!--    home section-->
    
                    
        <?php/* echo $_SESSION["USER_NAME"];            */?>
                
    
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="index.php"><img src="img/abc_new.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--            <a class="navbar-brand" href="">Hey <span style="color:#1ebba3;"> <?php echo $user; ?> Welcome,,,,, Back</span> How is your <span style="color:#1ebba3;">Pet</span></a>-->
            <a class="navbar-brand" href="">Hey <span style="color:#1ebba3;"> <?php echo $_SESSION["USER_NAME"]; ?> Welcome Back</span> How is your <span style="color:#1ebba3;">Pet</span></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li>
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
    <!-- end vavigation-->
    <!-- start Landing page section-->
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner2">

            </div>
        </div>

    </div>

    <div class="caption text-center">

        <h4>Search&nbsp;&nbsp;&nbsp;for&nbsp;&nbsp;&nbsp;Diseases</h4>
        <br>
        <!--
        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
            <form>
                <input type="text" name="Disease" placeholder="Disease..">
            </form>
        </div>
-->
        <div class="container">
            <form action="diseasesym.php" method="post">
                <input type="text" placeholder="Disease...">
                <div class="search"></div>
            </form>
        </div>

        <br>
        <br>
        <br>
        <br>

        <h4>Search&nbsp;&nbsp;&nbsp;for&nbsp;&nbsp;&nbsp;Symptoms </h4>
        <br>
        <div class="container1">
            <form action="diseasesym.php" method="post">
                <input type="text" placeholder="Symptoms...">
                <div class="search"></div>
            </form>
        </div>
        <!--
        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
            <form>
                <input type="text" name="Symptoms" placeholder="Symptoms..">
            </form>
        </div>
-->
        <!--        <h3>We absolutely love and care for your Pets.</h3>-->
        <!--        <a class ="btn btn-outline-light btn-lg" href ="#course">Get Started</a>-->

        <!-- end landing page-->
    </div>

    <!--    end home section-->


    <!--  course section-->

    <div id="clients" class="offset">
        <div class="col-12 narrow text-center">
            <h1>Food Suggestion of the Month.</h1>
            <p class="lead">The dogs should be friendly,outgoing,healthy,well-groomed and love to be fussed. All breeds, crossbreeds, shapes and sizes are welcome.</p>
        </div>
        <div class="col-12 narrow text-center">
            <h1>Monthly Tips.</h1>
            <p class="lead">The dogs should be friendly,outgoing,healthy,well-groomed and love to be fussed. All breeds, crossbreeds, shapes and sizes are welcome.</p>
        </div>
    </div>

    <!--    end course section-->


    <!--  contacts section-->
    <div id="contacts" class="offset">
        <footer>
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <img src="">
                    <h2>B for Bark</h2>
                    <p>Owning a dog is a joy, privilege, and responsibility. B for Bark is committed to protecting the health and well-being of all dogs.</p>
                    <strong>Contact Info</strong>
                    <p>(888) 888-8888<br>email@bforbark.com</p>
                    <!--
                    <a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
-->
                </div>
                <hr class="socket">
                &copy;B for Bark.
            </div>
        </footer>
    </div>
    <!--   end contacts section-->
</body>

</html>

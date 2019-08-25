<?php
    include 'conn_file.php';
            
    if(isset($_POST['Signup']))
    {
        $Pass=$_POST['Password'];
        $Name=$_POST['Name'];
        $Phone=$_POST['Phone'];
        $Street=$_POST['Street'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        
        
        $sqlp1="SELECT * FROM user_details WHERE Name='$Name' and Password='$Pass'";
        
        $resultp1=mysqli_query($conn,$sqlp1);
 
        $count1=mysqli_num_rows($resultp1);
     
   //  echo $count1;
        if($count1>0)
        {
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Username already exists.');\n";
            echo "window.location='UserRegistration.php.'";
            echo "</script>";
        }
        else
        {
            $qry="insert into user_details (Password,Name,Phone,Street,City,State) values('$Pass','$Name','$Phone','$Street','$City','$State')";
        
            $ret=mysqli_query($conn,$qry);
        
            if($ret)
            {
                echo "<script language=\"JavaScript\">\n";
                echo "alert('User Successfully Registered! You will be now redircted to Login Page');\n";
                echo "window.location='login.php.'";
                echo "</script>";
              //  exit;
            }
            else
            {
                die("ERROR ".mysqli_error($conn));
            }
            /*header("Location: search.php");// to user homepage */
        }
    }

?>


<!DOCTYPE html>
<html>
    <?php include 'conn_file.php'; ?>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UserRegistration</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
   <style>
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-size: cover;
        background-image: url("img/16.jpg");
        max-width: 100%;
        max-height: 100%;
        }
        .login-box{
        width:500px;
        position: absolute;
        background-color: white;
        opacity: 0.8;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
        color:black;

        }
        .login-box h1{
        float:left;
        font-size: 40px;
        border-bottom: 6px solid #1ebba3;
        margin-bottom: 50px;
        padding:13px 0;
        border-radius: 2px;
        }

        .textbox{
        width:100%;
        overflow:hidden;
        font-size: 20px;
        padding: 8px 0 ;
        margin: 8px 0;
        border-bottom: 1px solid #1ebba3;
        }
        .textbox i{
        width:60px;
        float:left;
        text-align:center;
        }
        .textbox input{
        border:none;
        outline: none;
        background: none;
        color:black;
        font-size: 18px;
        width: 150px;
        float:left;
        margin: 0 10px;
        }
        .btn{
        width: 100%;
        background: none;
        border:2px solid #1ebba3;
        color: black;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
        } 
       
     </style>
        </head>
<body data-spy ="scroll" data-target="#navbarResponsive">
<!--    home section-->
    <div id="home">
<!--        navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <a class="navbar-brand" href="index.html">Welcome to B for Bark</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class ="navbar-nav ml-auto">
            <li class="nav-item">
               <a class= "nav-link" href="index.html">Home</a>
            </li>
           <li>
            <li class="nav-item">
              <a class= "nav-link" href="#">Pets</a>
            </li>
             <li class="nav-item">
               <a class= "nav-link" href="healthcard.php">Health card</a>
            </li>
             <li class="nav-item">
               <a class= "nav-link" href="petregister.php">Pet-Register</a>
            </li>
             <li class="nav-item">
               <a class= "nav-link" href="">History</a>
            </li>
          </ul>
        </div>
    </nav>
        <!-- end vavigation-->
       
        <div class="col-12 narrow text-center login-box">
        <form action="#" method="post">
        <h1>Sign-Up</h1>
        <div class ="textbox">
        <!--        <i class="fas fa-user fa-3x " aria-hidden="true"></i>-->
        <input type="text" placeholder="Username" name="Name" value="">
        </div>
        <div class ="textbox">
        <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
        <input type="password" placeholder="Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 and maximum 16" required value="">
        </div>
        <div class ="textbox">
        <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
        <input type="text" placeholder="Phone" name="Phone" value="" pattern="[789][0-9]{9}" maxlength="10" title="Invalid phone number (Phone number less than or greater than 10)" required data-validation-required-message="Please enter your Phone Number.">
        </div>
        <div class ="textbox">
        <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
        <input type="text" placeholder="Street" name="Street" value="">
        </div>
        <div class ="textbox">
        <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
        <input type="text" placeholder="City" name="City" value="">
        </div>
        <div class ="textbox">
        <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
        <input type="text" placeholder="State" name="State" value="">
        </div>
        
       
        <button class="btn btn-secondary btn-md" href="login.php" target="_blank" name = "Signup">Sign-up</button>
        </form>
<?php
     /*       
    if(isset($_POST['Signup']))
    {
        $Pass=$_POST['Password'];
        $Name=$_POST['Name'];
        $Phone=$_POST['Phone'];
        $Street=$_POST['Street'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        
  //      echo "HELLO";
    //    echo $Pass;
      //  echo $Phone;
        //echo $City;
        
        $qry="insert into user_details (Password,Name,Phone,Street,City,State) values('$Pass','$Name','$Phone','$Street','$City','$State')";
            
        $ret=mysqli_query($conn,$qry);
        
        if($ret)
        {
            echo "SUCCESSFULL CREATION";
        //    header("gallery.php"); 
          //  exit;
        }
        else
        {
            die("ERROR ".mysqli_error($conn));
        }
        
        
    }*/
?>
        
<!--
        <div class="container" style="background-color:#f1f1f1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
-->
       </div>
    </div> 
  </body>
</html>
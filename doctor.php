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
.big text
    {
       font-size: 52px;
        margin: 20px 0;
        color:darkorange;
    }
   a.btn
{
    margin:30px 10px;
    width:200px;
    padding: 5px;
    border-radius: 10px;
}
    a.btn-first
    {
        background-color:darkorange;
        color:#fff;
        
        
    }
     a.btn-second
    {
        background:transparent;
        color:1px solid white;
        color:#333;
    }
    
    a.btn:hover
    {
        background: darkorange;
        border: none;
        color:#fff;
        box-shadow: 5px 5px 10px #999;
        transition: 0.3s;
        
    }
    .banner-info,.banner-image
    {
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
                <a class="navbar-brand" href="index.php"><img src="img/abc_new.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO DOCTOR INFO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
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
                            <a class="nav-link" href="login.php">Sign-in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="UserRegistration.php">Sign-up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <br><br><br><br>
        
        <div class="container">
            <div class ="row">
                <div class ="col-sm-6 banner-info">
                    <h1>Doctor Info</h1><br><br>
                    <p class="lead">Here you get all the Details Related to Pets</p>
                    <p>Know All the Details related to pet and also view the health card of the pet if needed</p>
                    <a class="btn btn-secondary btn-md" href="" target="_blank">Appointments</a>
                   <a class="btn btn-secondary btn-md" href="" target="_blank">Health Card</a>
                 </div>
             <div class ="col-sm-6 banner-image">
                 <img src="img/doctor.jpg"  height ="300px" width="600px"class="img-responsive">
             
            </div>
            </div>
        </div>
    </body>
</html>
        
        
        
        
        
        
        

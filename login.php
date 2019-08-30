<!--File description-->
<!--
 File name:B for bark
 Date:21/6/19
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background-image: url(img/19.jpg);
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

    </style>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->
    <div id="home">
        <!--        navigation-->
        <div id="home">
            <!--        navigation-->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
                <a class="navbar-brand" href="index.php"><img src="img/abc_new.png"></a>
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

        <div class="col-12 narrow text-center login-box">
            <form action="login1.php" method="post">
                <h1>Sign-in</h1>
                <div class="textbox">
                    <!--        <i class="fas fa-user fa-3x " aria-hidden="true"></i>-->
                    <input type="text" placeholder="Username" name="Name" value="">
                </div>
                <div class="textbox">
                    <!--        <i class="fas fa-lock fa-3x" aria-hidden="true"></i>-->
                    <input type="password" placeholder="Password" name="Password" value="">
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <u><span class="psw">New <a href="UserRegistration.php">User</a></span></u>
                <br>
                <br>
                <button class="btn btn-secondary btn-md" href="search.html" target="_blank" name="Login">Sign-in</button>
                
                <div class="text-center p-t-12">
					<u>
                    <span class="txt1">
						Forgot
					</span>
					<a class="txt2" href="forgotPass.php">
						Password 
                        </a></u>
<!--
					<a class="txt2" href="reset_password.php">
						Reset password
					</a>
-->
				</div>
                
            </form>

            <?php    
/*
    if(isset($_POST['Login']))
        {
            
            $name=$_POST['Name'];
            $pass=$_POST['Password'];
            
            $qry2="select * from user_details where Name='$name'
                    and Password='$pass'";
            $ret2=mysqli_query($conn,$qry2);
            
            if($ret2)
            {
                $row=mysqli_fetch_assoc($ret2);
                if($row > 0)
                {
                    echo "USER FOUND";
                }
                else
                {
                    echo "NO USER FOUND";
                }
            }
            else
            {
                echo "error".mysqli_error($conn);
            }
        }
            */
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

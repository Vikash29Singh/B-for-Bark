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
            background-image: url(img/5.jpg);
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
            width: 300px;
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
        <?php
    include 'conn_file.php';
	if(!empty($_POST["forgot-password"]))
	{
		//$conn = mysqli_connect("localhost", "root", "", "time_table_db");
		
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " Name = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) 
		{
			if(!empty($condition))
			 {
				$condition = " and ";
			}
			$condition = "Email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from user_details " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		}
		 else 
		 {
			$error_message = '<p style="color:red;">No Email Found</p>';
		}
	}
?>
        <link href="demo-style.css" rel="stylesheet" type="text/css">
        <script>
            function validate_forgot() {
                if ((document.getElementById("user-login-name").value == "") && (document.getElementById("Email").value == "")) {
                    document.getElementById("validation-message").innerHTML = "Login Email is required!"
                    return false;
                }
                return true
            }

        </script>
        <!--<br><br><h3><li><a href="login.php" target="_self" >Back</a></li></h3>-->
        <form align="center" name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();"><br><br><br><br>
<!--            <h1>Forgot Password?</h1>-->
            <?php if(!empty($success_message)) 
	{ ?>
            <div class="success_message"><?php echo $success_message; ?></div>
            <?php } ?>

            <div id="validation-message">
                <?php if(!empty($error_message)) 
		{ ?>
                <?php echo $error_message; ?>
                <?php
 }
  ?>
            </div>

            <!-- <div class="field-group">
		<div><label for="username">Username</label></div>
		<div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> Or</div>
	</div>
	 -->
<!--
            <div class="field-group">
                <div><label for="email">
                        <h3>Enter Your Email</h3>
                    </label></div>
                <div><input type="text" name="user-email" id="user-email" class="input-field" required>
                    <input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button">
-->
                    
                    
                    <div class="col-12 narrow text-center login-box">
            <form action="login1.php" method="post">
                <h1>Forgot Password?</h1>
                <div class="textbox">
                    <input type="email" name="user-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" title="Please input a valid format for email." placeholder="Email" id="user-email" class="input-field" required >
                </div>

                <button class="btn btn-secondary btn-md" href="search.php" target="_blank" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button">Sign-in</button>


            </form>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

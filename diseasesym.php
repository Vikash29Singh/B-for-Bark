<!DOCTYPE html>
<html>
<?php include 'conn_file.php';
    session_start();
    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disease</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background-image: url(img/31.jpg);
            max-width: 100%;
            max-height: 100%;
        }

        .single-blog {
            box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.2);
            padding: 10px;
            margin-top: 30px;
            background-color: #fff;
        }

        .single-blog img {
            width: 100%;
        }

        .blog-meta {
            font-size: 14px;
            margin-bottom: 2px;
            color: #1ebba3;
        }

        .single-blog span {
            float: right;
            font-size: 12px;
            color: cornflowerblue;

        }

        .blog-text {
            font-size: 14px;
            text-align: justify;

        }

        .single-blog h2 {
            margin-top: 10px;
            font-size: 16px;
            color: #1ebba3;
        }

        .single-blog h2 a {
            text-decoration: none;
        }

        .read-more-btn {
            background-image: linear-gradient(to right, #1ebba3, #5c8bef);
            padding: 5px 12px 8px;
            border-radius: 20px;
            line-height: 20px;
            font-size: 14px;
            color: #fff;
            border: none !important;
        }

        .read-more-btn:hover {
            background-image: linear-gradient(to right, #1ebba3, #00b128);
            text-decoration: none;
            color: #fff;
        }

        article {
            float: left;
            padding: 10px;
            width: 100%;
            background-color: white;
            height: 300px;
            /* only for demonstration, should be removed */
        }

    </style>
</head>

<body>

    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="search.php"><span style="color:#1ebba3;">Welcome How is your Pet</span></a>
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
                </ul>
            </div>
        </nav>

    </div>
    <br>
    <br>



    <?php
    
            $dname=$_POST['Dname'];
                $qry1="select * from disease_details where Disease_Name='$dname'";
                $q=mysqli_query($conn,$qry1);
        $dis=mysqli_fetch_assoc($q);
        $did=$dis['Disease_Id'];
        
    $uname=$_SESSION["USER_NAME"];
    
        $qrn="select * from user_details where Name='$uname'";
        $rrn=mysqli_query($conn,$qrn);
        $a=mysqli_fetch_assoc($rrn);
        $iid=$a['U_Id'];
    $qrecom="insert into d_search (U_Id,Disease_Id) values ('$iid','$did')";
    
    $rrecom=mysqli_query($conn,$qrecom);
        if($rrecom)
        {
            echo "done";
        }
    else
    {
        echo mysqli_error($conn);
    }
    
    $qry2="select * from symptoms where Disease_Id='$did'";
                $q2=mysqli_query($conn,$qry2); 
    $qry3="select * from remedies where Disease_Id='$did'";
                $q3=mysqli_query($conn,$qry3);
       
    ?>

    <div class="container">
        <center>
            <h1><span style="color:#1ebba3;">Disease Description</span></h1>
            <p><span style="color:white;">Here are the Details<br>Related to your pets Health</span></p>
        </center>
        <div class="row">

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">Diseases<span>September 24,2018</span></p>
                    <img src="img/5.jpg">
                    <h2><a href="#">Here is the Disease Description specified by you</a></h2>
                    <p class="blog-text"><?php echo $dis['Disease_name'] ?>
                        <br>
                        <?php echo $dis['Disease_description'] ?></p>

                    <p><a href="" class="read-more-btn">Read More</a>
                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> We Hope This Helps You</span>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">Symptoms<span>September 24,2018</span></p>
                    <img src="img/23.jpg">
                    <h2><a href="#">Here is the Symptoms for the Specified Disease</a></h2>
                    <p class="blog-text">
                        <?php
                    $i=1;
                    while ($row1 = mysqli_fetch_assoc($q2)) 
                                {
                                    echo $i. $row1["Symptoms"];
                                    $i=$i+1;
                                    ?><br><?php
                                }
                    ?>
                    </p>
                    <p><a href="" class="read-more-btn">Read More</a>
                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>We Hope This Helps You</span>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">Remedies<span>September 24,2018</span></p>
                    <img src="img/17.jpg">
                    <h2><a href="#">This is our help for you</a></h2>
                    <p class="blog-text">
                        <?php
                $i=1;
                while ($row2 =mysqli_fetch_assoc($q3)) 
                            {
                                echo $i. $row2["Remedies"];
                                //echo $did;
                                $i=$i+1;
                                ?><br><?php
                            }
                        ?>
                    </p>
                    <p><a href="" class="read-more-btn">Read More</a>
                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>We Hope This Helps You</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <article>
        <center>
            <h3>Sample</h3>
        </center>
        <center>
            <p>Something that corrects or counteracts. (law) The legal means to recover a right or to prevent or obtain redress for a wrong. A medicine, application, or treatment that relieves or cures a disease.</p>
        </center>
        <p></p>
    </article>
</body>

</html>

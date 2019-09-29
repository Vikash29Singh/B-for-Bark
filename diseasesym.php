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
    <br>
    <br>



    <?php
    
    if(isset($_POST['Dname']))
    {
    
            $dname=$_POST['Dname'];
                $qry1="select * from disease_details where Disease_Name='$dname'";
                $q=mysqli_query($conn,$qry1);
        $dis=mysqli_fetch_assoc($q);
        $did=$dis['Disease_Id'];
        $_SESSION['DID']=$did;
        
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
     
    }
    
    
    
    
    
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
                                echo $row['Disease_name'];
                            }
           
         
       }
    
    
    
    
    
    
    
    
    ?>

    <div class="container">
        <center>
            <h1><span style="color:#1ebba3;">Disease Description</span></h1>
            <p><span style="color:white;">Here are the Details<br>Related to your pets Health</span></p>
        </center>
        <div class="row">

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">Diseases<span>August 31,2019</span></p>
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
                    <p class="blog-meta">Symptoms<span>August 31,2019</span></p>
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
                    <p class="blog-meta">Remedies<span>August 31,2019</span></p>
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
            <h3>SUGGESTED DOCTORS</h3>
        </center>
        <center>
            <p>
            <?php
                $did=$_SESSION['DID'];
            $qi="select * from doctor_details where speciality=(select Disease_type from disease_details where Disease_Id='$did')";
                $da=mysqli_query($conn,$qi);
                
                while($drow=mysqli_fetch_assoc($da))
                {
                    echo $drow['Doc_name']." From ";
                    echo $drow['Location'];
                    $did=$drow['Doc_Id'];
                    
                    ?> <br> <form action="diseasesym.php" method="post">
            <button type="submit" name="send">TAKE APPOINTEMENT</button>
                <input type="text" name="pname" placeholder="for which pet of yours">
                </form>
                
                <?php
                }
            
            if(isset($_POST['send']))
            {
                $name=$_POST['pname'];
                $uname=$_SESSION['USER_NAME'];
                $pre1="Select * from user_details where Name='$uname'";
                $rpre1=mysqli_query($conn,$pre1);
                $ok=mysqli_fetch_assoc($rpre1);
                $id=$ok['U_Id'];
                
                $qn="Select * from pet_details where Name='$name'";
                $rqn=mysqli_query($conn,$qn);
                $rw=mysqli_fetch_assoc($rqn);
                $pid=$rw['P_Id'];
                
                    $qrysend="insert into doc_appointment(Doc_id,P_Id) values('$did','$pid')";
                        $ans=mysqli_query($conn,$qrysend);
                if($ans)
                {
                    echo "alert('APOINTEMENT TAKEN')";
        
                }
                        
                
            }
            
            ?>
            </p>
        </center>
        <p></p>
    </article>
</body>

</html>

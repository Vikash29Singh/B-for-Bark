
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Disease Recognition System</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
    <style>
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
        .dis
        {
        color: white;

        }
        .sym
        {
        color: white;

        }

    </style>
 </head>
    <?php
include 'conn_file.php';

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
            
?>
<body data-spy ="scroll" data-target="#navbarResponsive">
<!--    home section-->
    <div id="home">
<!--        navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <a class="navbar-brand" href="">Welcome How is your Pet</a>
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
               <a class= "nav-link" href="petregister.html">Pet-Register</a>
            </li>
             <li class="nav-item">
               <a class= "nav-link" href="">History</a>
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
        <div class ="caption text-center">
        <h4>Search&nbsp;&nbsp;&nbsp;for&nbsp;&nbsp;&nbsp;Diseases </h4>
            <br>
            <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
            <form>
                      <input type="text" name="Disease" placeholder="Disease..">
            </form>
            </div>
            <br>
            <br>
         <h4>Search&nbsp;&nbsp;&nbsp;for&nbsp;&nbsp;&nbsp;Symptoms </h4>
            <br>
            <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
            <form>
                      <input type="text" name="Symptoms" placeholder="Symptoms..">
            </form>
            </div>
<!--        <h3>We absolutely love and care for your Pets.</h3>-->
<!--        <a class ="btn btn-outline-light btn-lg" href ="#course">Get Started</a>-->
           
            <!-- end landing page-->
      </div>
    
<!--    end home section-->
    
        
    <!--  course section-->
    <div id="course" class ="offset">
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
    <div id="contacts" class ="offset">
    <footer>
      <div class= "row justify-content-center">
          <div class ="col-md-5 text-center">
          <img src="">
              <h2>B for Bark</h2>
              <p>Owning a dog is a joy, privilege, and responsibility. B for Bark is committed to protecting the health and well-being of all dogs.</p>
              <strong>Contact Info</strong>
             <p>(888) 888-8888<br>email@bforbark.com</p> 
              <a href ="" target="_blank"><i class ="fab fa-facebook-square"></i></a>
              <a href ="" target="_blank"><i class ="fab fa-twitter-square"></i></a>
              <a href ="" target="_blank"><i class ="fab fa-instagram"></i></a>
          </div>
          <hr class ="socket">
          &copy;B for Bark.
     </div>  
    </footer>    
 </div>
<!--   end contacts section-->
</body>
</html>
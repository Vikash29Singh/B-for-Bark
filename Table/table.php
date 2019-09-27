<!DOCTYPE html>
<html lang="en">

<?php 
    include 'D:/wamp64/www/B-for-Bark/conn_file.php';  
    
    session_start();
?>
    
<head>
    <title>Table </title>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Health card</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <!--===============================================================================================-->
    <!--	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->


    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }

        #sidebar {
            position: fixed;
            width: 200px;
            height: 100%;
            background: #151719;
            left: -200px;
            transition: all 500ms linear;
        }

        #sidebar.active {
            left: 0px;
        }

        #sidebar ul li {
            color: rgba(230, 230, 230, 0.9);
            list-style: none;
            padding: 15px 10px;
            border-bottom: 1px solid rgba(100, 100, 100, 0.3);
        }

        #sidebar .toggle-btn {
            position: absolute;
            left: 230px;
            top: 20px;
        }

        #sidebar .toggle-btn span {
            display: block;
            width: 20px;
            height: 10px;
            background: #151719;
            margin: 5px 0px;

        }
        ul li a{
            text-decoration: none;
            color:white;
            display:block;
        }
        ul li a:hover{
            background-color:#1ebba3;;
        }
        ul li ul li{
            display:none;
        }
        ul li:hover ul li{
            display: block;
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
                        <a class="nav-link" href="/B-for-Bark/search.php">Home</a>
                    </li>
                    <li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">Health card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/B-for-Bark/petregister.php">Pet-Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/B-for-Bark/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <br><br>

    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a class="nav-link" href="#">PETS</a>
            <ul>
                
                <?php
          /*          
                Table users:
    user_id (pk, ai)
    email
    password
    last_login

Table data:
    user_id (fk to users.user_id)
    data_1
    data_2
    
    SELECT users.email, users.password, data.data_1, data.data_2
FROM users,data 
WHERE users.email='$user_email' AND users.user_id=data.user_id";
       
                
                    $fetch1 = "SELECT user_pet.P_Id, pet_details.Name FROM user_pet, pet_details WHERE user_pet.P_Id = pet_details.P_Id";
                    $result = mysqli_query($conn,$fetch1);
                    
                    
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    //echo "<td>" . $row['Breed'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";

                */?>
                
                <li><a class="nav-link" href="#"><?php
          /*          
                Table users:
    user_id (pk, ai)
    email
    password
    last_login

Table data:
    user_id (fk to users.user_id)
    data_1
    data_2
    
    SELECT users.email, users.password, data.data_1, data.data_2
FROM users,data 
WHERE users.email='$user_email' AND users.user_id=data.user_id";
        */
                    
                    $fetch1 = "SELECT user_pet.P_Id, pet_details.Name FROM user_pet, pet_details WHERE user_pet.P_Id = pet_details.P_Id";
                    $result = mysqli_query($conn,$fetch1);
                    
                    $c = 0;
                    //$row = mysqli_fetch_array($result)
                    $array=array();
                    
                    $size=mysqli_num_rows($result);
                    
                    
                    while($row = mysqli_fetch_assoc($result))
                    {

                    // add each row returned into an array
                    $array[] = $row;
                    $c++;
                    }
                    
                    for($i=0;$i<$size;$i++)
                    {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<br>";
                    //echo "<td>" . $row['Breed'] . "</td>";
                    echo "</tr>";
                    
                    

                ?></a></li>
                <li><a class="nav-link" href="#">
                    <?php echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<br>";
                    //echo "<td>" . $row['Breed'] . "</td>";
                    echo "</tr>"; ?> </a></li>
                <li><a class="nav-link" href="#"><?php echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<br>";
                    //echo "<td>" . $row['Breed'] . "</td>";
                    echo "</tr>"; ?></a></li>
                    <?php
                    }
                    echo "</table>";
                        ?>

            </ul>
            </li>

            <li><a class="nav-link" href="#">PET DETAILS</a></li>
            <li><a class="nav-link" href="#">OTHER DETAILS</a></li>
        </ul>
    </div>


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                            <tr class="row100 head">
                                <th class="column100 column1" data-column="column1">
                                    <center>
                                        <h5>Pet Healthcard</h5>
                                    </center>
                                </th>

                            </tr>

                        </thead>
                        <tbody>
                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">NAME</td>
                                <td class="column100 column2" data-column="column2"></td>


                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">BREED</td>
                                <td class="column100 column2" data-column="column2"></td>


                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">WEIGHT</td>
                                <td class="column100 column2" data-column="column2"></td>

                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">AGE</td>
                                <td class="column100 column2" data-column="column2"></td>
                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">BLOOD GROUP</td>
                                <td class="column100 column2" data-column="column2"></td>
                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">ALLERGIES</td>
                                <td class="column100 column2" data-column="column2">
                                </td>

                            </tr>

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">MEDICATION</td>
                                <td class="column100 column2" data-column="column2">
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }

    </script>

</body>

</html>

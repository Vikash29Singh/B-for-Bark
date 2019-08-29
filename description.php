<!DOCTYPE html>
<html lang="en">

<head>
    <title>Description</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <style>
        * {
            box-sizing: border-box;
        }

        /*
body {
  font-family: Arial, Helvetica, sans-serif;
}
*/

        /* Style the header */
        header {
            background-color: #1ebba3;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        .1 {
            float: left;
            width: 70%;
            height: 300px;
            /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
        }

        /* Style the list inside the menu */
        .1 ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 10px;
            width: 100%;
            background-color: #f1f1f1;
            height: 300px;
            /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        .2:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        /*
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
*/

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

    </style>
</head>

<body>



    <p></p>
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
            <a class="navbar-brand" href="">Welcome How is your Pet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="healthcard.php">Health card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="petregister.html">Pet-Register</a>
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
    <br>

    <center><h2>Diseases</h2></center>
    
    
    
    
    
    
    
    <center><p> Death due to disease is called death by natural causes. There are four main types of disease: infectious diseases, deficiency diseases, hereditary diseases (including both genetic diseases and non-genetic hereditary diseases), and physiological diseases</p></center>
    <center><h2>Symptoms</h2></center>
     <center><p>Symptoms are used in diagnosis. The term is used in medicine, and in other fields such as fault-finding in engineering. In medicine, it refers to things the patient feels or notices. It contrasts with signs, which are changes which a doctor sees in a patient.</p></center>

    <header>
        <h2>Your Suggestions</h2>
    </header>

    <!--
<section class=2>
  <nav class=1>
    <ul>
      <li><a href="#">Remedies</a></li>
      <li><a href="#">Doctor details </a></li>
      <li><a href="#">location</a></li>
    </ul>
  </nav>
-->

    <article>
        <center><h3>Remedies</h3></center>
        <center><p>Something that corrects or counteracts. (law) The legal means to recover a right or to prevent or obtain redress for a wrong. A medicine, application, or treatment that relieves or cures a disease.</p></center>
        <p></p>
    </article>
    <!--</section>-->

    <!--
<footer>
  <p>Footer</p>
</footer>
-->

</body>

</html>

<?php
//connectie code insluiten
  require_once("includes/dbconn.inc.php");
  //query om gegevens uit de tabel tblLid op te halen

 

  $qrySelectLid = "SELECT lidID, voornaam, naam, email, geboortedatum
                      FROM tblLid
                      ORDER BY naam";
  //stap2: prepared statement voorbereiden
  if ($stmtLid = mysqli_prepare($dbconn, $qrySelectLid)) {
    //stap3: query uitvoeren
    mysqli_stmt_execute($stmtLid);
    //stap4: koppeling aan locale variabelen
    mysqli_stmt_bind_result($stmtLid, $lidID, $voornaam, $naam,  $email, $geboortedatum);
    //stap5: resultaten opslaan
    mysqli_stmt_store_result($stmtLid);
  }



    $qrySelectEvent = "SELECT eventID, naamEvent, datum, plaats, groep, uur, afstand
                        FROM tblEvent
                        ORDER BY datum";
    if ($stmtEvent = mysqli_prepare($dbconn, $qrySelectEvent)) {

      mysqli_stmt_execute($stmtEvent);

      mysqli_stmt_bind_result($stmtEvent, $eventID, $naamEvent, $datum, $plaats, $groep, $uur, $afstand);

      mysqli_stmt_store_result($stmtEvent);
    }



    $qrySelectSpecial = "SELECT specialID, dateSpecial, nameSpecial
                        FROM tblSpecial
                        ORDER BY dateSpecial";
    if ($stmtSpecial = mysqli_prepare($dbconn, $qrySelectSpecial)) {

      mysqli_stmt_execute($stmtSpecial);

      mysqli_stmt_bind_result($stmtSpecial, $specialID, $dateSpecial, $nameSpecial);

      mysqli_stmt_store_result($stmtSpecial);
    }


  //sluiten van de databank connectie
  mysqli_close($dbconn);


 ?>


 <?php
   session_start();


             $mysqli = new mysqli("localhost", "brittai314", "PU!h3o6v", "brittai314_wtcPapillon");
             $sql = 'SELECT gebruikersnaam FROM tblLid';
             $result = $mysqli->query($sql); //$result = mysqli_result object

  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wtc Papillon</title>

    <!-- Bootstrap core CSS -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/resume.css">

    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lightbox.css">


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">

    <style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded mx-auto mb-2" src="image/logo.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#event">Ritten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#buienradar">Buienradar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#lid">Leden</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#foto">Foto's</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#links">Links</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">



<!--
===========
Events
===========
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="event">
        <div class="my-auto">
          <div class="text-center">

            <header class="section-header">

              <h3>Events</h3>
                <br>
              </header>

                <div class="container">


                  <table class="grid" align="center">
                  <div class="text-center">
                    <tr>

                      <th>Rit</th>
                      <th>Datum</th>
                      <th>Plaats</th>
                      <th>Uur</th>
                      <th>Groep</th>
                      <th>KM</th>
                    </tr>
                </div>
                <div class="text-center">
                  <?php
                    $teller = 1;
                      while (mysqli_stmt_fetch($stmtEvent)) {

                        echo "<tr>";

                        echo "<td>" . $naamEvent . "</td>";
                        echo "<td>" . date('d-m-Y', strtotime($datum)) . "</td>";
                        echo "<td>" . $plaats . "</td>";
                        echo "<td>" . date('H:i', strtotime($uur)) . "</td>";
                        echo "<td>" . $groep . "</td>";
                        echo "<td>" . $afstand . " KM </td>";
                        echo "</tr>";

                          $teller++;
                      }
                         //gegevens staan opgeslagen in de $stmt en gaan we nu insluiten
                         mysqli_stmt_close($stmtTicket);
                        ?>
        </div>
          </table>
        </div>
        </div>

        </div>
      </section>








<!--
===========
Special
===========
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="event">
        <div class="my-auto">
          <div class="text-center">

            <header class="section-header">

              <h3>Speciale ritten</h3>
                <br>
              </header>

                <div class="container">


                  <table class="grid" align="center">
                  <div class="text-center">
                    <tr>
                      <th>Datum</th>
                      <th>Rit</th>
                    </tr>
                </div>
                <div class="text-center">
                  <?php
                    $teller = 1;
                      while (mysqli_stmt_fetch($stmtSpecial)) {

                        echo "<tr>";
                        echo "<td>" . date('d-m-Y', strtotime($dateSpecial)) . "</td>";
                        echo "<td>" . $nameSpecial . "</td>";
                        echo "</tr>";

                          $teller++;
                      }
                         //gegevens staan opgeslagen in de $stmt en gaan we nu insluiten
                         mysqli_stmt_close($stmtTicket);
                        ?>
        </div>
          </table>
        </div>
        </div>

        </div>
      </section>











<!--
===========
Buienradar
===========
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="buienradar" align="center">
        <div class="my-auto">
          <a href="http://www.buienradar.be" target="_blank"><img border="0" src="http://api.buienradar.nl/image/1.0/radarmapbe?width=550"></a>
        </div>
      </section>



<!--
===========
Leden
===========
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="lid">
        <div class="my-auto">
          <div class="text-center">
            <header class="section-header">
              <h3>Leden</h3>
              <br>
            </header>

        <div class="container">


        <div class="text-center">
          <table class="grid" align="center">

            <tr>


              <th>Voornaam</th>
              <th>Naam</th>
              <th>Email</th>
              <th>Verjaardag</th>
              <!--  <th>foto</th> -->
            </tr>
         </div>

          <div class="text-center">
            <?php
            $teller = 1;
              while (mysqli_stmt_fetch($stmtLid)) {

                echo "<tr>";

                echo "<td>" . $voornaam .  "</td>";
                echo "<td>" . $naam . "</td>";
                echo "<td>" . $email .  "</td>";
                echo "<td>" . date('d-m-Y', strtotime($geboortedatum)) .  "</td>";
                //echo "<td> <a href=" . $foto . "><img src='https://icongr.am/feather/image.svg?size=32' ></a> </td>";
                echo "</tr>";

                $teller++;
              }
              //gegevens staan opgeslagen in de $stmt en gaan we nu insluiten
              mysqli_stmt_close($stmtKlant);
             ?>
          </div>
          </table>
</div>
        </div>
</div>
      </section>


<!--
===========
foto's
===========
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="foto">
        <div class="my-auto">
          <div id="gallery">


                <div class="row">

                  <table id="foto">
                      <tr>
                      <td>
                            <a href="cycling-vlaanderen.php" ><img src="image/cycling-vlaanderen.jpeg" alt="cycling-vlaanderen"></a>
                        </td>
                        <td>
                            <a href="veldtoertocht_2018.php" ><img src="image/veldtoertocht_2018.jpg" alt="veldtoertocht 2018"></a>
                        </td>
                        <td>
                            <a href="4daagse.php" ><img src="image/4daagse.jpg" alt="4daagse"></a>
                        </td>
                      </tr>

                      <tr>
                      <td>
                            <a href="frankrijk.php" ><img src="image/frankrijk.JPG" alt="frankrijk"></a>
                        </td>
                        <td>
                            <a href="alpen.php" ><img src="image/alpen.jpg" alt="alpen"></a>
                        </td>
                        <td>
                            <a href="fietspiste.php" ><img src="image/fietspiste.JPG" alt="fietspiste"></a>
                        </td>
                      <!--     <td>
                             <a href="vogezen_2012.php" ><img src="image/vogezen2012.JPG" alt="vogezen"></a>
                          </td>-->

                      </tr>

                      <tr>
                      <td>
                              <a href="vogezen.php" ><img src="image/vogezen.JPG" alt="vogezen"></a>
                          </td>
                        <td>
                            <a href="alpen_2006.php" ><img src="image/alpen2006.JPG" alt="alpen"></a>
                        </td>
                      </tr>

                  </table>



          </div>
        </div>
      </div>
      </section>




<!--
=============
Links
=============
-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="links" align="center">
        <div class="my-auto">
          <h2> Links</h2>
<br><br><br>
          <a target="_blank" class="img-fluid img-profile rounded mx-auto mb-2" href="https://www.vwb.be/"><img alt="" src="image/vwb.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a target="_blank" class="img-fluid img-profile rounded mx-auto mb-2" href="https://www.nbike.be/"><img alt="" src="image/nbike.jpg"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a target="_blank" class="img-fluid img-profile rounded mx-auto mb-2" href="https://www.vaneycksport.com/nl/"><img alt="" src="image/eyck_sport.jpg"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a target="_blank" class="img-fluid img-profile rounded mx-auto mb-2" href="http://www.mtb-you.be/"><img alt="" src="image/mtb-you.png"></a>


        </div>
      </section>

    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
       <script src="js/main.js"></script>
    <script src="js/resume.min.js"></script>

  </body>

</html>

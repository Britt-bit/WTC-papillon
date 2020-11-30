<?php
//connectie maken met de databank
require_once("includes/dbconn.inc.php");
 
//sessie starten
session_start();



  $_SESSION['message'] = '';
          $mysqli = new mysqli("localhost", "brittai314", "PU!h3o6v", "brittai314_wtcPapillon");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $specialID = $mysqli->real_escape_string($_POST['specialID']);
    $nameSpecial = $mysqli->real_escape_string($_POST['nameSpecial']);
    $dateSpecial = $mysqli->real_escape_string($_POST['dateSpecial']);


        $_SESSION['nameSpecial'] = $nameSpecial;

        $sql = "INSERT INTO tblSpecial (specialID, nameSpecial, dateSpecial)
                values('$specialID', '$nameSpecial', '$dateSpecial')";

        if ($mysqli->query($sql) === true) {
          $_SESSION['message'] = "";
          header("location: special.php");
        }

          else {
            $_SESSION['message'] = "This could not be added to the database";
          }

      }

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Leden login</title>

<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


<link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="form">



    <div id="signup">
      <h1>Speciale ritten</h1>

      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <form action="special.php" name="registreer" method="post">



            <div class="field-wrap">
              <label>

              </label>
              <input type="date" name="dateSpecial" id="datum"/>
            </div>



            <div class="field-wrap">
              <label>
                Naam Rit
              </label>
              <input type="text" name="nameSpecial" id="naam"/>
            </div>



          <button type="submit" class="button button-block" name="registreer" id="button"/>Toevoegen</button>
        
<br> <br>
        <a href="admin.php"><div class="xyz">ritten</div></a>
          </form>



        </div>


      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/login.js"></script>





</body>
</html>

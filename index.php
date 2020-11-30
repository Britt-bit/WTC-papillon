<?php
//connectie maken met de databank
require_once("includes/dbconn.inc.php");

//sessie starten 
session_start();

//testen of er op de knop werd gedrukt
if (isset ($_POST["button"])) {
   //ingevulde gegevens in lokale variabelen
   $gebruikersnaam = $_POST["gebruikersnaam"];
   $wachtwoord = $_POST["wachtwoord"];

   //testen of gebruikersnaam en wachtwoord correct zijn
   $qrySelectLid = "SELECT lidID
                    FROM tblLid
                    WHERE gebruikersnaam=? AND
                          wachtwoord=?";
   //voorbereiden prepared statement
   if ($stmt = mysqli_prepare($dbconn, $qrySelectLid)) {
	  //onbekende waarden in query binden dmv parameters
	  mysqli_stmt_bind_param($stmt, "ss", $gebruikersnaam,
	  $wachtwoord);
	  //query laten uitvoeren
	  mysqli_stmt_execute($stmt);
	  //verkregen resultaten van de query binden aan lokale
	  //variabelen
	  mysqli_stmt_bind_result($stmt, $lidID);
	  //verkregen resultaten opslaan
	  mysqli_stmt_store_result($stmt);
	  //bij 1 record onmiddelijk fetch
	  mysqli_stmt_fetch($stmt);
	  //aantal records oprvagen
	  $aantal = mysqli_stmt_num_rows($stmt);

	  //statement niet meer nodig
	  mysqli_stmt_close($stmt);
	  //databank connectie niet meer nodig
	  mysqli_close($dbconn);




	  //testen of login gelukt is

      if($_POST["gebruikersnaam"]=="admin"){
      		  header("location:admin.php");
      	   }
      	  elseif ($aantal == 1) {
      		 $_SESSION["gebruikersnaam"] = $gebruikersnaam;

      		 header("location:page.php");
      	  } else {
      		$foutmelding = "Username/password incorrect";

      	  }

    }

  //  $_SESSION['lidID'] = $lidID;
    }



?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Leden login</title>


<link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="form">



        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="" id="login" name="login" method="post">

            <div class="field-wrap">
            <label for="gebruikersnaam">
              Gebruikersnaam<span class="req">*</span>
            </label>
            <input type="text" name="gebruikersnaam" id="gebruikersnaam" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label for="wachtwoord">
              Wachtwoord<span class="req">*</span>
            </label>
            <input type="password" name="wachtwoord" id="wachtwoord" required autocomplete="off"/>
          </div>


          <button type="submit" name="button" id="button" class="button button-block" />Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/login.js"></script>





</body>
</html>

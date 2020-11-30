<?php
//dit bestand zit in de submap inculdes
//dit stukje code gaat connectie maken met de databank
//definieren van de instellingen
  define("SERVERNAME", "localhost");
  define("USERNAME", "brittai314");
  define("PASSWORD", "PU!h3o6v");
  define("DATABASE", "brittai314_wtcPapillon");
  //connectie maken met de databank
  $dbconn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);
  //var_dump($dbconn);
 ?>

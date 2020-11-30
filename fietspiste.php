<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Fietspiste Gert Hillen</h1>

</div>


<div class="row">
  <div class="column">
    <img src="image/fietspiste/001.JPG" style="width:100%">
    <img src="image/fietspiste/002.JPG" style="width:100%">
    <img src="image/fietspiste/003.JPG" style="width:100%">
    <img src="image/fietspiste/004.JPG" style="width:100%">

  </div>
  <div class="column">
    <img src="image/fietspiste/005.JPG" style="width:100%">
    <img src="image/fietspiste/006.JPG" style="width:100%">
    <img src="image/fietspiste/007.JPG" style="width:100%">
    <img src="image/fietspiste/008.JPG" style="width:100%">


  </div>
  <div class="column">
    <img src="image/fietspiste/009.JPG" style="width:100%">
    <img src="image/fietspiste/010.JPG" style="width:100%">
    <img src="image/fietspiste/011.JPG" style="width:100%">
    <img src="image/fietspiste/012.JPG" style="width:100%">


  </div>
  <div class="column">
    <img src="image/fietspiste/013.JPG" style="width:100%">
    <img src="image/fietspiste/014.JPG" style="width:100%">
    <img src="image/fietspiste/015.JPG" style="width:100%">
    <img src="image/fietspiste/016.JPG" style="width:100%">
  </div>


</div>

</body>
</html>
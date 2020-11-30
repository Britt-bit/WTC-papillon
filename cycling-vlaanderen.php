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
  <h1>Cycling-Vlaanderen 2019</h1>

</div>

<!-- Photo Grid -->
<div class="row">
  <div class="column">
    <img src="image/cycling-vlaanderen/001.jpeg" style="width:100%">
    <img src="image/cycling-vlaanderen/005.jpeg" style="width:100%">

  </div>


  <div class="column">
    <img src="image/cycling-vlaanderen/002.jpeg" style="width:100%">
    <img src="image/cycling-vlaanderen/006.jpeg" style="width:100%">

  </div>


  <div class="column">
    <img src="image/cycling-vlaanderen/003.jpeg" style="width:100%">

  </div>


  <div class="column">
    <img src="image/cycling-vlaanderen/004.jpeg" style="width:100%">

  </div>
</div>

</body>
</html>
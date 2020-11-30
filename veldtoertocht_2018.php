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
  <h1>veldtoertocht_2018</h1>

</div>


<div class="row">
  <div class="column">
    <img src="image/veldtoertocht_2018/001.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/002.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/003.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/004.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/017.jpg" style="width:100%">

  </div>
  <div class="column">
    <img src="image/veldtoertocht_2018/005.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/006.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/007.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/008.jpg" style="width:100%">


  </div>
  <div class="column">
    <img src="image/veldtoertocht_2018/009.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/010.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/011.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/012.jpg" style="width:100%">


  </div>
  <div class="column">
    <img src="image/veldtoertocht_2018/013.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/014.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/015.jpg" style="width:100%">
    <img src="image/veldtoertocht_2018/016.jpg" style="width:100%">
  </div>


</div>

</body>
</html>

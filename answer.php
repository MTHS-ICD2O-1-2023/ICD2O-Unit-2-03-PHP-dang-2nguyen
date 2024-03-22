<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Perimeter of square, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Dang" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style2.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Perimeter of square</title>
</head>
<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and Perimeter of Rectangle, in PHP</span>
      </div>
    </header>
    <center>
      <div class="right-image">
        <img src="./images/Square-Perimeter-582x267.png" alt="laptop image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $lengthOfSquare = $_POST["length-of-square"];
          // process  
          $perimeter =  $lengthOfSquare * 4;
          // output
          echo "If a square has length = " . $lengthOfSquare . " cm:";
          echo "<br />";
          echo "<br />";
          echo "The perimeter of square is " . $perimeter . " cm.";
          ?>
        </div>
      </div>
  </div>
</center>
</body>

</html>
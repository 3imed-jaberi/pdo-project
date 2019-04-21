<?php
  // get all data .. 
   require_once "./src/api/getData.php" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- GOOGLE FONT API -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <!-- My CSS Styles -->
  <link rel="stylesheet" href="./public/styles/style.css">

  <title>PDO Project</title>

</head>
<body>

  <!-- The main module -->
   <?php require_once "./src/app.php" ?>

  <!-- My JS Script -->
   <script src="./public/scripts/main.js"></script>

</body>
</html>
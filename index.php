<?php
  include ('data.php');
  include ('components.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=IBM+Plex+Mono&family=Montserrat:ital@0;1&family=Poppins:wght@300;400;500;600;700;800&family=Raleway:ital@0;1&family=Roboto&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Creatic Creative Agency</title>
    <script src="js/carousel.js" defer></script>
  </head>
  <body>
    <!-- header  -->
     <?php 
      setHeader($headerData);
     ?>


    <!-- first section  -->
     <?php 
      firstSection();
     ?>

    <!-- Section 5 -->
     <?php
      setServices($services, $boxes);
     ?>
    
    <!-- Section 6 -->
     <?php
      setBlocks($blocks);
     ?>
    <!-- Section 7 -->
      <?php
        setWork($ourWork, $slidePic);
      ?>

    <!-- Section 8 -->

      <?php
        setWhy($whyUs, $reasons);
      ?>

    <!-- Section 9 -->

    <?php
      setClient($clientSay);
    ?>


<?php
      setFooter();
    ?>
        
  </body>
</html>
 
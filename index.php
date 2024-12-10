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
    <script src="./script.js"></script>
  </head>
  <body>
    <!-- header  -->
     <?php 
      setHeader($headerData);

      // Section 1
      firstSection($firstSectionData);

      // Section 2
      secondsection($aboutData);

      // Section 3
      setServices($services, $boxes);
    
      // Section 4
      setBlocks($blocks);

      // Section 5
      setWork($ourWork, $slidePic);

      // Section 6
      setWhy($whyUs, $reasons);

      // Section 7
      setClient($clientSay);

      // Section 8
      intouch($getInTouch, $infos);

      // // Support Section
      // setSupport($supportData);

      // Footer
      setFooter($footerMenuData, $socialMediaData);
    ?>
        
  </body>
</html>
 
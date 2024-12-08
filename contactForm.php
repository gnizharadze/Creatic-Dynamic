<?php
  include ('data.php');
  include ('components.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
} else {
    header("Location: index.php");
    exit();
}
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
    <?php
      setHeader($headerData);  
    ?>
    <div class="response">
        <h1 class='formsubmit'>Your form has been submitted!</h1>
        <p class='form-p-one'>Thank you, <?php echo $name; ?>, for reaching out to us.</p>
        <p class='form-p-two'>We have received your message and get back to you shortly.</p>    
    </div>
    
    <?php
      setFooter(); 
    ?>
</body>
</html>



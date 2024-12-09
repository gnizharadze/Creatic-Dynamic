<?php

include('data.php');


// header  
function setHeader($headerData){

  echo '<header>';
    echo '<div class="header container">';

        // Logo Section
        echo '<div class="logo">';
            echo '<a href="./index.php"><img src="./Image/LOGO.png" alt="Logo"></a>';
        echo '</div>'; // End of Logo Section

        // Navigation Section
        echo '<div class="nav">';
            echo '<ul>';
                foreach ($headerData as $data) {
                    echo '<li><a href="' . $data['link'] . '">' . $data['page'] . '</a></li>';
                }
                // Search Icon
                echo '<li><a href="#" class="search-icon"><img src="./Image/magnify.png" alt="Search"></a></li>';
            echo '</ul>';
        echo '</div>'; // End of Navigation Section

        // Hamburger Menu Section
        echo '<div class="hamburger-menu">';
            echo '<input type="checkbox" id="menu">';
            echo '<label for="menu">';
                echo '<div class="hamburger-menu-icon">&#9776;</div>';
            echo '</label>';
            
            echo '<div class="sidebar-nav">';
                echo '<div class="sidebar">';
                    echo '<ul>';
                        foreach ($headerData as $data) {
                            echo '<li><a href="' . $data['link'] . '">' . $data['page'] . '</a></li>';
                        }
                        // Sidebar Search Icon
                        echo '<li><a href="#" class="search-icon"><img src="./Image/magnify.png" alt="Search"></a></li>';
                    echo '</ul>';
                echo '</div>'; // End of Sidebar
            echo '</div>'; // End of Sidebar Navigation
        echo '</div>'; // End of Hamburger Menu Section

        // Search Bar Section
        echo '<div class="search-bar hidden">';
            echo '<input type="text" class="search-input" placeholder="Search...">';
            echo '<button class="close-search">X</button>';
        echo '</div>'; // End of Search Bar Section

    echo '</div>'; // End of Header Container
  echo '</header>';
  }
// section 1 

function firstSection($firstSectionData){
  echo '<section>';
    echo    '<div class="first_section container">';
    echo       '<div class="womanimage">
                  <img src="./Image/beautiful-woman-with-big-jewel 1.png" alt="Woman Picture">';
    echo       '</div>';
    echo       '<div class="texts">';
    echo            '<h2 class="welcometext"> '. $firstSectionData ['welcomeText'] .'</h2>';
    echo            '<h1 class="welcome-h1">'. $firstSectionData ['headline'] .'</h1>';
    echo            '<div class="line"></div>';
    echo            '<p id="p2">'. $firstSectionData ['description'] .'</p>';
    echo            '<a href="#">'. $firstSectionData ['buttonText'] .'</a>';
    echo       '</div>';

    echo    '</div>';
    echo '</section>';
  };

// Section 2
function secondsection($aboutData){
  echo '<section class="section2 container">';
    echo '<div class="about-us">';
      echo '<img class="robot" src='.$aboutData['image'].' alt="About">';
      echo '<div class="aboutpart">';
        echo '<h2 class="about">'.$aboutData['about'].'</h2>';
        echo '<h1 class="about-title">'.$aboutData['about-title'].'</h1>';
        echo '<hr>';
        echo '<h3 class="create">'.$aboutData['create'].'</h3>';          
        echo '<p class="about-text">'.$aboutData['text'].' </p>';
        echo '<a href="#" class="button">'.$aboutData['button'].'</a>';
      echo '</div>';
    echo '</div>';
  echo '</section>';
  }
// Section 3
function setServices($services, $boxes){
      echo '<section class="section3 container">';
          echo '<div class="services">';
                echo '<div class="innovation">
                        <h2 class="topic">'.$services['topic'].'</h2>
                        <h1 class="title">'.$services['title'].'</h1>
                        <hr />
                        <p class="text">
                          '.$services['text'].'
                        </p>
                        <a class="button" href="#">'.$services['button'].'</a>';
                echo '</div>';
            echo '<div class="boxes">';
                    foreach ($boxes as $box){
                      echo '<div class="box box1">
                          <img src='.$box['Image'].' alt="video icon" />
                          <h2 class="video-title">'.$box['video-title'].'</h2>
                          <p class="video-text">
                            '.$box['video-text'].'
                          </p>';
                      echo '</div>';
                    }
            echo '</div>';
          echo '</div>';
      echo '</section>';
    };

// Section 4
function setBlocks($blocks){
        echo '<section class="section4 container">';
            echo '<div class="sectionblock">';
                echo '<div class="blocks">';
                    foreach ($blocks as $block){
                          echo '<div class="block">
                              <img src='.$block['Image'].' alt="team-members" />
                              <h1 class="count">'.$block['count'].'</h1>
                              <h2 class="team">'.$block['team'].'</h2>';
                          echo '</div>';
                      }
                echo '</div>';
            echo '</div>';  
        echo  '</section>';
    };

// Section 5
function setWork($ourWork, $slidePic){ 
    echo '<section class="section7 container">';
      echo '<div class="our-work">
        <h1 class="title">ENJOY OUR <span>LATEST</span> PROJECTS</h1>';
        echo '<div class="work-line">
                <hr />
                <h2 class="work-text">OUR WORK</h2>
                <hr />';
        echo '</div>';
        echo '<div class="picture-slide">
                <img src='.$slidePic['url1'].' alt="slidepic1" />
                <img src='.$slidePic['url2'].' alt="slidepic2" />
                <img src='.$slidePic['url3'].' alt="slidepic3" />';
        echo '</div>';
        echo '<div class="rectangle">
            <a href="#"><img src="./Image/Rectangle.png" alt="1" /></a>
            <a href="#"><img src="./Image/Rectangle.png" alt="2" /></a>
            <a href="#"><img src="./Image/Rectangle.png" alt="3" /></a>
            <a href="#"><img src="./Image/Rectangle.png" alt="4" /></a>';
        echo '</div>';
      echo '</div>';
    echo '</section>';
  };

// Section 6
function setWhy($whyUs, $reasons){
  echo '<section class="section6 container">';
    echo '<div class="why-us">';
      echo '<p class="why-title">'.$whyUs['title'].'</p>';
      echo '<hr class="why-hr">';
      echo '<div class="why-main">';
        echo '<div class="why-left">';
          echo '<h1 class="why-experience">
                    '.$whyUs['experience'].' ';
          echo '</h1>';
          echo '<a class="button" href='.$whyUs['url'].'>'.$whyUs['button'].'</a>';
        echo '</div>';
        echo '<div class="why-right">';
          echo '<p class="right-text">'.$whyUs['text'].'</p>';
          echo '<ul>';
              foreach ($reasons as $reason){
                echo '<li>
                        '.$reason.' 
                      </li>';
              };
          echo '</ul>';
        echo '</div>';
      echo '</div>';
    echo '</div>';   
  echo '</section>';
  };


// Section 7
function setClient($clientSay){
  echo '<section class="say">';
    echo '<div class="what-they-say container">';
      echo '<img class="side-image image-left" src='.$clientSay['image1'].' alt="half1">';
        echo '<div class="clients-say">';
          echo '<div class="client-content">';
            echo '<div class="first-box">';
                echo '<h1 class="our-say">'.$clientSay['say'].'</h1>';
                echo '<hr class="first-hr">';
                echo '<h2 class="testimonial">'.$clientSay['testimonial'].'</h2>';
            echo '</div>';
            echo '<div class="second-box">';
                echo '<div class="inside-second-box">  
                        <p class="second-text">'.$clientSay['text'].'</p>';
                echo '<div class="second-author">';     
                  echo '<img src='.$clientSay['author-image'].' alt="author">';     
                  echo '<div class="name-contact">';     
                    echo '<p class="author-name">'.$clientSay['name'].'</p>';      
                    echo '<p class="author-contact">'.$clientSay['contact'].'</p>';    
                  echo '</div>';
                  echo '<img src='.$clientSay['coomas'].' alt="coomas">';     
                echo '</div>';
            echo '</div>';
           echo '</div>';
           echo '<a class="button" href='.$clientSay['url'].'>'.$clientSay['button'].'</a>';
          echo '</div>';
        echo  '</div>';
      echo '<img class="side-image image-right" src='.$clientSay['image2'].' alt="half2">';
    echo '</div>';
  echo'</section>';
  }


// <!-- Section 8 -->
function intouch($getInTouch, $infos){
  echo '<section class="contact-intouch container">';
    echo '<div class="contact-getintouch">';
      echo '<div class="intouch">';
        echo '<div class="intouchup">';
          echo '<h1 class="touchup">'.$getInTouch['touch'].'</h1>';
          echo '<hr class="intouch-hr">';
          echo '<p class="intouch-p">'.$getInTouch['text'].'';
          echo '</p>';
        echo '</div>';
        echo '<div class="intouch-info">';
            foreach($infos as $data){
          echo '<div class="'.$data['class'].'">';
            echo '<img class="pin" src='.$data['image'].' alt="map icon" />';
            echo '<div class="office">';
             echo '<h3>'.$data['description'].'</h3>';
              echo '<p>'.$data['info'].'</p>';        
            echo '</div>';
          echo '</div>';
          };
        echo '</div>';    
      echo '</div>'; 
      echo '<div class="form">';
        echo '<div class="form-container">';
          echo '<form class="contact-form" action="./contactForm.php" method="POST">
                    <label for="name">YOUR NAME</label>
                    <input type="text" id="name" name="name" placeholder="" />
                
                    <label for="email">YOUR EMAIL</label>
                    <input type="email" id="email" name="email" placeholder="" />
                
                    <label for="message">YOUR MESSAGE</label>
                    <textarea id="message" name="message" placeholder=""></textarea>
                
                    <button type="submit">SEND MESSAGE</button>';
            echo '</form>';
        echo '</div>';
      echo '</div>';       
    echo '</div>';              
  echo '</section> ';
  }

// Footer
function setFooter($footerMenuData, $socialMediaData) {
      echo '<footer>';
        echo '<div class="footer container">';
          echo '<div class="logo">
                  <a href="#"><img src="./Image/LOGO.png" alt=""></a>';
          echo '</div>';
          echo '<div class="line1"></div>';
          echo '<div class="footer_menu">';
            echo '<ul type="none">';
              foreach ($footerMenuData as $menuItem) {
                  echo '<li><a href="' . $menuItem['link'] . '">' . $menuItem['title'] . '</a></li>';
              }
            echo '</ul>';
          echo '</div>';
          echo '<div class="footer_text">';
              echo '<p>Lorem ipsum Neque porro quisquam est qui do lorem ipsum quia dolor sit amet, Neque porro elit NeDque</p>';
          echo '</div>';
          echo '<div class="soc_media">';
              echo '<ul type="none">';
              foreach ($socialMediaData as $platform => $icon) {
                  echo '<li><a href="#"><img src="' . $icon . '" alt="' . $platform . '"></a></li>';
                }
              echo '</ul>';
          echo '</div>';
          echo '<p class="footerbottom">Copyright © 2003-2023 Creatic Agency All rights reserved.</p>';
        echo '</div>';
      echo '</footer>';
  };

?>
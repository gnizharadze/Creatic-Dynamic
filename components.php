<?php

include('data.php');


// Section 5
function setServices($services, $boxes){
      echo '<section class="section5">';
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

// Section 6
function setBlocks($blocks){
        echo '<section class="section6">';
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

// Section 7
function setWork($ourWork, $slidePic){
    echo '<section class="section7">';
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


// Javascript function
//   function setWork($ourWork, $slidePic){
//       echo '<section class="section7">'; 
//           echo '<div class="our-work">';
//               echo '<h1 class="title">ENJOY OUR <span>LATEST</span> PROJECTS</h1>';
//               echo '<div class="work-line">
//                       <hr />
//                       <h2 class="work-text">OUR WORK</h2>
//                       <hr />';
//               echo '</div>';
//               // Add a wrapper for slides
//               echo '<div class="picture-slide">';
//                   echo '<div class="carousel-container">';
//                       echo '<div class="carousel-slide">';
//                           echo '<img src="'.$slidePic['url1'].'" alt="slidepic1" />';
//                           echo '<img src="'.$slidePic['url2'].'" alt="slidepic2" />';
//                           echo '<img src="'.$slidePic['url3'].'" alt="slidepic3" />';
//                       echo '</div>';
//                   echo '</div>';
//                   echo '<div class="rectangle">';
//                       echo '<span class="dot active" onclick="changeSlide(0)"><img src="./Image/Rectangle.png" alt="cube1" /></span>';
//                       echo '<span class="dot" onclick="changeSlide(1)"><img src="./Image/Rectangle.png" alt="cube1" /></span>';
//                       echo '<span class="dot" onclick="changeSlide(2)"><img src="./Image/Rectangle.png" alt="cube1" /></span>';
//                   echo '</div>';
//               echo '</div>';
//           echo '</div>';
//       echo '</section>';
//   };
// 

// Section 8

function setWhy($whyUs, $reasons){
  echo '<section class="section8">';
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



// Section 9

function setClient($clientSay){
  echo '<section class="say">';
    echo '<div class="what-they-say">';
      echo '<img src='.$clientSay['image1'].' alt="half1">';
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
      echo '<img src='.$clientSay['image2'].' alt="half2">';
    echo '</div>';
  echo'</section>';
}
?>
        
                  
                  
              
                      
          
          

          
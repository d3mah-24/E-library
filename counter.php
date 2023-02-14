<?php
     // session_start(); // Should always be on top
     if(!isset($_SESSION['counter'])) { // It's the first visit in this session
       $handle = fopen("counter.txt", "r"); 
       if(!$handle){ 
        echo "Could not open the file" ;
         } 
        else { 
          $counter = ( int ) fread ($handle,20) ;
          fclose ($handle) ;
          $counter++ ; 
          // echo" <p> Visitor Count: ". $counter . " </p> " ; 
          $handle = fopen("counter.txt", "w" ) ; 
          fwrite($handle,$counter) ; 
          fclose ($handle) ;
          $_SESSION['counter'] = $counter;
          }

     } 
    //  elseif (isset($_SESSION['counter'])) {
    //     $counter = $_SESSION['counter'];
    //     $counter++ ;
       
    //    echo" <p> Visitor Count: ". $counter . " </p> " ;
    //  }
     else { // It's not the first time, do not update the counter but show the total hits stored in session
        $handle = fopen("counter.txt", "r"); 
       if(!$handle){ 
        echo "Could not open the file" ;
         } 
        else { 
          $counter = ( int ) fread ($handle,20) ;
          fclose ($handle) ;
          $counter++ ; 
          // echo" <p> Visitor Count: ". $counter . " </p> " ; 
          $handle = fopen("counter.txt", "w" ) ; 
          fwrite($handle,$counter) ; 
          fclose ($handle) ;
          $_SESSION['counter'] = $counter;
          }
     }
?>


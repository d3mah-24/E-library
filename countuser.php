
<?php
     session_start(); // Should always be on top
     if(!isset($_SESSION['cuo'])) { // It's the first visit in this session
       $handle = fopen("cuo.txt", "r"); 
       if(!$handle){ 
        echo "Could not open the file" ;
         } 
        else { 
          $counterus = ( int ) fread ($handle,20) ;
          fclose ($handle) ;
          $counterus++ ; 
         
          $handle = fopen("cuo.txt", "w" ) ; 
          fwrite($handle,$counterus) ; 
          fclose ($handle) ;
          $_SESSION['cuo'] = $counterus;
          }

     }
     else { // It's not the first time, do not update the counter but show the total hits stored in session
     $ahmed = fopen("cuo.txt","r");
   $counterus = ( int ) fread ($ahmed,20) ;
          fclose ($ahmed) ;
           
   //   $counterus = $_SESSION['cuo'];
      
    }
?>

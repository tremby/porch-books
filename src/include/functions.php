<?php



   function fig($pos, $photo, $scale=1, $border=0) {
      global $bspecj;   // global must be declared before the variable is used!
      $bspecj = NULL;
      if ( $border > 0 )
         $bspecj = " style=\"border:{$border}px solid black\" " ;
      $photoarray = getimagesize($photo);
      $xfig = round($photoarray[0]*$scale);
      $yfig = round($photoarray[1]*$scale);
//      $spec = $photoarray[3]; // This gives complete string "width=234 height=123" but to allow scaling we will use x and y separately
      echo "   <figure class=\"$pos\" style=\"width: {$xfig}px\">  ";
      echo "<img src=\"$photo\" width=$xfig height=$yfig $bspecj >\n   <figcaption>\n";
      global $widthfixj;
      $widthfixj = $xfig;
//      return $widthfixj;  // Is this line necessary, now that we have made it global?  No.
      }

   function figbelow($photoB) {
   // function figbelow($photoB, $scaleB=1, $border=0) {
   // Remove scale option -- this photo must match width of the first one.
   // Remove border option -- use same border as first photo.
   // Obviously pos$ and width must be same as the photo above; if actual width of the second photo differs, we will scale it to agree with the first, and its height by the same scale.
   // But how to read the variable $widthfixj from the previous function ???
   // Eureka!  BOTH functions must have the line "global $widthfixj;"
   // Experts warn that global can cause bugs on large sites, but this site is (a) simple and (b) will use only weird names for globals.
   // Now, is it necessary to have $widthfixj as a second paramenter in the function def? No.
   //     function figbelow($photoB, $widthfixj) {

      global $widthfixj ;    // These two values come from the previous function
      global $bspecj ;

      echo "   </figcaption>\n\n" ;    // This ends previous caption and starts new fig.

      $xA = $widthfixj ;
      $photoarrayB = getimagesize($photoB) ;
      $xfigB  = $photoarrayB[0] ;
      $scaleB = $xA/$xfigB ;
      $yfigB  = round($photoarrayB[1]*$scaleB) ;   // Whole pixels, no decimal places
//      echo "   <img src=\"$photoB\" width=$xA height=$yfigB " ;
//      if ( $boj > 0 )
//         echo " style=\"border:{$boj}px solid black\" " ;
//      echo ">\n   <figcaption>\n" ;
      echo "   <img src=\"$photoB\" width=$xA height=$yfigB $bspecj >\n   <figcaption>\n" ;
      }

   function figend() {
      echo "   </figcaption>\n   </figure>\n\n" ;
      }

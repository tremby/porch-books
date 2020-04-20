<?php    // stronged$wrapwidth =160

date_default_timezone_set("Europe/London");

function menuitem($label, $goget, $window=NULL) {
   $q = "\"";                 // quotemark, avoiding confusion of escape character
   $heretag=NULL ;

   ($window == NULL) ? ($winspec = NULL) : ($winspec = " target=$q$window$q") ;   // Webjames DOES know the ternary operator; my error was "=" rather than "=="
//   if ($window <> NULL) {
//       $winspec = " target=$q$window$q" ;            // ahh, that semicolon before the final "}"
//       }


   if ($goget . ".php" == $_SERVER['PHP_SELF']) {
      $heretag = " class={$q}active{$q}" ;
      $linktag = NULL;
      $endlink = NULL;
      } else {
      $linktag = "<a href=$q$goget$q$winspec>" ;
      $endlink = "</a>";
      }

   echo "<li" . $heretag . ">" . $linktag . $label . $endlink . "</li>\n" ;
   }

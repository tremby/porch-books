<?php    // stronged$wrapwidth =160

date_default_timezone_set("Europe/London");

function menuitem($label, $goget, $window=NULL) {
   $q = "\"";                 // quotemark, avoiding confusion of escape character
   global $got_j ;            // current filename, determined before this function was called
   $heretag=NULL ;

   ($window == NULL) ? ($winspec = NULL) : ($winspec = " target=$q$window$q") ;   // Webjames DOES know the ternary operator; my error was "=" rather than "=="
//   if ($window <> NULL) {
//       $winspec = " target=$q$window$q" ;            // ahh, that semicolon before the final "}"
//       }


   if ($goget == $got_j) {                          // Test whether we're already on the page being called.  "==" rather than "=" to compare string variables
      $heretag = " class={$q}active{$q}" ;
      $linktag = NULL;
      $endlink = NULL;
      } else {
      $linktag = "<a href=$q$goget$q$winspec>" ;
      $endlink = "</a>";
      }

   echo "<li" . $heretag . ">" . $linktag . $label . $endlink . "</li>\n" ;
   }

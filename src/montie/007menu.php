
<ul id="list-nav">
<li> </li>
<?php
  global $got_j ;
  $got_j = basename($_SERVER['PHP_SELF']);     // current_filename
  menuitem("Section 1",   "/montie/");
  menuitem("Section 2",   "002.php");
  menuitem("Family tree", "003famtree.png", "_new");
  menuitem("Search",      "004search.php");
  menuitem("Sources",     "008acks.php");
  menuitem("Imprint" ,    "009imprint.php");
?>
<li> </li>
</ul>




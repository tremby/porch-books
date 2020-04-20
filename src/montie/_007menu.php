
<ul id="list-nav">
<li> </li>
<?php
  global $got_j ;
  $got_j = basename($_SERVER['PHP_SELF']);     // current_filename
  menuitem("Section 1",   "1");
  menuitem("Section 2",   "2");
  menuitem("Family tree", "famtree.png", "_new");
  menuitem("Search",      "search");
  menuitem("Sources",     "acks");
  menuitem("Imprint" ,    "imprint");
?>
<li> </li>
</ul>




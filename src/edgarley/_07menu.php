
<ul id="list-nav">
<li> </li>
<?php
  global $got_j ;
  $got_j = basename($_SERVER['PHP_SELF']);     // current_filename
  menuitem("Text",        "text");
  menuitem("Family tree", "famtree.png", "_new");
  menuitem("Sources",     "acks");
  menuitem("Imprint" ,    "imprint");
?>
<li> </li>
</ul>

<?php // style="background-color: #BA7878" ?>


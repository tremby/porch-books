
<ul id="list-nav">
<li> </li>
<?php
  global $got_j ;
  $got_j = basename($_SERVER['PHP_SELF']);     // current_filename
  menuitem("Text",        "01.php");
  menuitem("Family tree", "03famtree.png", "_new");
  menuitem("Sources",     "08acks.php");
  menuitem("Imprint" ,    "09imprint.php");
?>
<li> </li>
</ul>

<?php // style="background-color: #BA7878" ?>


<?php

// 190531 this began as a quick adaptation from Consoc site
// 190616 added "meta viewport" line
// 190617 moved stylesheets to AP-net siteroot "!elements" folder
// 190618 the call to !porchE.css applies only to the Edgarley booklet.
// 190622 added <div class="wholepage"> to deal with readers who habitually view fullscreen; this constrains page to 800px. Articletail has </div>.
// 190705 added Viewport metatag as sugested by Bart (email 190724)


  require 'functions.php';
  require 'functions2.php';
?>
<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Generator" content="DDF2Html">
      <link href="/!elements/!2018.css" rel="stylesheet">
      <link href="/!elements/!porch.css" rel="stylesheet">
<?php if ($notedir=="edgarley") {
      echo "      <link href=\"/!elements/!porchE.css\" rel=\"stylesheet\">\n" ;
      } ?>
<title><?php echo $titlebar ?> | Abbey Press Glastonbury</title>
</head>
<body><div class="wholepage"><article class="clearfix">
<!-- 190817 correction after "wholepage": ">" rather than closeparenthesis -->


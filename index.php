<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div id="header" class="row">
		<?php include ("content/header.php"); ?>
    </div>
    <div id="content" class="row">
        <?php require ("php/logic.php"); ?>
        <?php require ("content/content.php"); ?>
	</div>
	<div id="footer" class="row">
        <?php include ("content/footer.php"); ?>
	</div>
  </body>
</html>

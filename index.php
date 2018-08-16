<?php
require 'vendor/autoload.php';
$maat = new Maat\Renderer();
$files = glob('tests/*.{txt}', GLOB_BRACE);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maat test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="maat.css">
  </head>
  <body>
    <?php foreach ($files as $file) : ?>
    <div class="note">
        <h2 class="title"><?php echo basename($file, ".txt"); ?></h2>
        <div class="content">
            <?php echo $maat->render(file_get_contents($file)) ?>
        </div>
    </div>
    <?php endforeach; ?>
  </body>
</html>
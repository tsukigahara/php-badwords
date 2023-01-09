<?php
$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur repellat ex ut itaque numquam perferendis, alias cupiditate veniam amet ea, consectetur iste repellendus nemo vitae animi quia voluptates, quibusdam voluptatibus.";
// cennsura la porzione di testo corrispondente al badword
$search = $_GET["badword"];
$replace = "***";
$newText = str_replace($search, $replace, $text);
?>

<h1>
  <?php
  echo $newText;
  ?>
</h1>
<h2>
  string length:
  <?php
  echo strlen($newText);
  ?>
</h2>
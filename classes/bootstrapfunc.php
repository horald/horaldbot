<?php
// https://stackoverflow.com/questions/37815260/input-and-button-in-same-line-with-bootstrap

function bootstraphead() {
echo "<!DOCTYPE html>";
echo "<html lang='de'>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>";
echo "<link href='includes/bootstrap/css/bootstrap.css' rel='stylesheet'>";
echo "<link href='includes/bootstrap/css/bootstrap-horald.css' rel='stylesheet'>";
//echo "<link href='includes/bootstrap/css/bootstrap-anpassung.css' rel='stylesheet'>";
echo "<script src='includes/bootstrap/js/jquery-latest.js'></script>";
echo "<title>HoraldBot</title>";
echo "</head>";
}

function bootstrapbegin($headline,$showheadline) {
  echo "<body>";
  echo "<div class='row-fluid'>";
  echo "<div class='span12'>";
  //echo "<h1 align='center'>".$headline."</h1>";
  if ($headline<>"") {
    echo "<legend>".$headline."</legend>";
  }
}

function bootstrapend() {
  $version="1.03";	
  echo "</div>";
  echo "</div>";
  echo "</body>";
  echo "<footer style='font-size:12px;'>";
  echo "<hr />";
  echo "Version ".$version;
  echo "</footer>";
  echo "</html>";
}

?>
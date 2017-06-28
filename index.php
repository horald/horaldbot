<?php
echo "Tut mir leid. Ich bin noch nicht fertig.";
/*
include 'classes/bootstrapfunc.php';
include 'classes/tools.php';
include 'config.php';
include 'abfrage.php';
include 'antwort.php';
bootstraphead();
bootstrapbegin();
$dbFile="config.php";
if (filesize($dbFile) == 0 ) {
  checkdb(); 
} else {
  $q=$_GET['q'];
  $frage=$_POST['frage'];
  $q=abfrage($q,$frage);
  antwort($q,$frage,$gdbcon,"WEB"); 

  echo "<form class='form-inline' action='index.php?q=1' method='post'>";
  echo "  <div class='orm-group'>";
  echo "    <label for='exampleInputText'>Fragen an HoraldBot:</label>";
  echo "    <input type='text' name='frage' class='form-control' id='exampleInputText'>";
  echo "    <button type='submit' class='btn btn-default'>Abschicken</button>";
  echo "  </div>";
  echo "</form>";
}
bootstrapend();
*/
?>
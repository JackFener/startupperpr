<?php

$servername = "sql3.freesqldatabase.com";
$db ="sql3176161";
$username = "sql3176161";
$password = "APDKE2d1cn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


$myfile = fopen("mailTech.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  $stringa=fgets($myfile);
  list ($nome, $azienda, $ruolo, $mail) = split (';', $stringa);
  $sql = "INSERT INTO CONTATTI (nome, sito, ruolo, mail)
    VALUES ('".$nome ."', '".$azienda ."', '".$ruolo ."', '".$mail ."')";


    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
fclose($myfile);
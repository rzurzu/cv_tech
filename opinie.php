<?php
if(isset($_POST['submit'])){
$Name = "Imię:".$_POST['cf-name']."/n";
$Email = "Email:".$_POST['cf-email']."/n";
$Message = "Wiadomość:".$_POST['cf-message']."/n";
$file=fopen("opinie.txt", "a+");
fwrite($file, $Name);
fwrite($file, $Email);
fwrite($file, $Message);
fclose($file);
}
?>
<?php
if(isset($_POST['submit'])){
$Name = "Imię:".$_POST['cf-name']."
";
$Email = "Email:".$_POST['cf-email']."
";
$Message = "Wiadomość:".$_POST['cf-message']."
";
$file=fopen("opinie.txt", "a+");
fwrite($file, $Name);
fwrite($file, $Email);
fwrite($file, $Message);
fclose($file);
}
?>
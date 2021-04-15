<?php
session_start();
$username = $_COOKIE["user"];
$usernames = file("usernames.txt");
$fnames = file("fnames.txt");
$lnames = file("lnames.txt");
$pwds = file("pwds.txt");
// finding the index number, to be used for all info
for ($userindx = 0; $userindx < count($usernames); $userindx++) {
    if ($usernames[$userindx] == $username) {
       break;
    }
}
// if all good delete info in db and show success
\array_splice($fnames, $userindx, 1);
\array_splice($usernames, $userindx, 1);
\array_splice($lnames, $userindx, 1);
\array_splice($pwds, $userindx, 1);

$fnw = fopen("fnames.txt", "w");
foreach ($fnames as $d) {
  fwrite($fnw, $d."\r\n");
}
fclose($fnw);

$unw = fopen("usernames.txt", "w");
foreach ($usernames as $d) {
  fwrite($unw, $d."\r\n");
}
fclose($unw);

$lnw = fopen("lnames.txt", "w");
foreach ($lnames as $d) {
  fwrite($lnw, $d."\r\n");
}
fclose($lnw); 

$pww = fopen("pwds.txt", "w");
foreach ($pwds as $d) {
  fwrite($pww, $d."\r\n");
}
fclose($pww);
setcookie("user", "", time() - 3600);
setcookie("pwd", "", time() - 3600);
session_destroy();
// destroy session and redirect to login page
echo "<script> window.open('../loginp.php', '_self') </script>";
?>
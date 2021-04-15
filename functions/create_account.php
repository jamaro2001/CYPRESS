<?php
if(isset($_POST['register'])){
    // get input
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $user_name = $_POST['new_user'];
    $password = $_POST['new_pwd'];
    $usernames = file('functions/usernames.txt', FILE_IGNORE_NEW_LINES);
    $fnames = file('functions/fnames.txt', FILE_IGNORE_NEW_LINES);
    $lnames = file('functions/lnames.txt', FILE_IGNORE_NEW_LINES);
    $pwds = file('functions/pwds.txt', FILE_IGNORE_NEW_LINES);
    // check if username is taken
    if (in_array($user_name, $usernames)){
        echo "<script> alert('Username already exists!') </script>";
        exit();
    }
    // if all good add to db
    array_push($fnames, $first_name."\r\n");
    $fnw = fopen("functions/fnames.txt", "a");
    foreach ($fnames as $d) {
        fwrite($fnw, $d."\r\n");
    }
    fclose($fnw);

    $lnw = fopen("functions/lnames.txt", "a");
    fwrite($lnw, $last_name."\r\n");
    fclose($lnw);

    $unw = fopen("functions/usernames.txt", "a");
    fwrite($unw, $user_name."\r\n");
    fclose($unw);

    $pww = fopen("functions/usernames.txt", "a");
    fwrite($pww, $password."\r\n");
    fclose($pww);

    // file_put_contents('functions/usernames.txt', $user_name . "\r\n", FILE_APPEND);
    // file_put_contents('functions/fnames.txt', $first_name . "\r\n", FILE_APPEND);
    // file_put_contents('functions/lnames.txt', $last_name . "\r\n", FILE_APPEND);
    // file_put_contents('functions/pwds.txt', $password . "\r\n", FILE_APPEND);
    // create session and redirect to homepage
    $_COOKIE["user"] = $user_name;

    echo "<script> window.open('portal.html', '_self') </script>";

}
?>

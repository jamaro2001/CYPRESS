<?php
if(isset($_POST['register'])){
    // get input
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $user_name = $_POST['new_user'];
    $password = $_POST['new_pwd'];
    // check if username is taken
    $usernames = file("usernames.txt");

    if (in_array($user_name, $usernames)){
        echo "<script> alert('Username already exists!') </script>";
        exit();
    }
    // if all good add to db
    file_put_contents("usernames.txt", $user_name . "\r\n", FILE_APPEND);
    file_put_contents("fnames.txt", $first_name . "\r\n", FILE_APPEND);
    file_put_contents("lnames.txt", $last_name . "\r\n", FILE_APPEND);
    file_put_contents("pwds.txt", $password . "\r\n", FILE_APPEND);
    // create session and redirect to homepage
    $_SESSION['username'] = $user_name;

    echo "<script> window.open('home.php', '_self') </script>";

}
?>
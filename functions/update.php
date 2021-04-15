<?php
session_start();
// if update button pressed do the following
if(isset($_POST['update'])){
    // get inputs
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
// check if nothing is empty
    if ( empty($first_name) || empty($last_name)){
        printf("Empty value processed! record not updated!");
        exit();
    }
    // get user name
    $username = $_SESSION["user"];
    $usernames = file("usernames.txt");
    $fnames = file("fnames.txt");
    $lnames = file("lnames.txt");
    // finding the index number, to be used for all info
    for ($userindx = 0; $userindx < count($usernames); $userindx++) {
        if ($usernames[$userindx] == $username) {
           break;
        }
    }
    // if all good update info in db and show success
    $fnames[$userindx] = $first_name;
    $lnames[$userindx] = $last_name;
    $fnw = fopen("fnames.txt", "w");
    foreach ($fnames as $d) {
      fwrite($fnw, $d."\r\n");
    }
    fclose($fnw);
    $lnw = fopen("lnames.txt", "w");
    foreach ($lnames as $d) {
      fwrite($lnw, $d."\r\n");
    }
    fclose($lnw);     
    echo "<script> alert('Success!') </script>";
    echo "<script> window.open('http://FIX.php', '_self') </script>"; //FIX: USE HARD LINK TO SAME PAGE

}

?>
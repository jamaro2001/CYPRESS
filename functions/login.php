<?php
session_start();

if(isset($_POST['login'])){
        
    $user_name = $_POST['user'];
    $password = $_POST['pwd'];
    $usernames = file("usernames.txt");
    $passwords = file("pwds.txt");
    
    // if good create sesh
    if (in_array($user_name, $usernames) && in_array($password, $passwords)){
        $_SESSION['username'] = $user_name;
        echo "<script> window.open('home.php', '_self') </script>"; // FIX: REDIRECT TO CYPRESS HOME
        
    }
    // if invalid credentials, error
    else{
        echo "<script> alert('Invalid credentials.') </script>";
    }

}
?>


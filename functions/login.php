<?php
session_start();

if(isset($_POST['login'])){  
    $user_name = $_POST['user'];
    $password = $_POST['pwd'];
    $usernames = file('functions/usernames.txt', FILE_IGNORE_NEW_LINES);
    $passwords = file('functions/pwds.txt', FILE_IGNORE_NEW_LINES);
    
    // if good create sesh
    if (in_array($user_name, $usernames) && in_array($password, $passwords)){
        $_SESSION['username'] = $user_name;
        echo "<script> window.open('portal.html', '_self') </script>"; // FIX: REDIRECT TO CYPRESS HOME
        
    }
    // if invalid credentials, error
    else{
        echo "<script> alert('Invalid credentials.') </script>";
    }

}
?>


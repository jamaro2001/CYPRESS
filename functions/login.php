<?php
session_start();

if(isset($_POST['login'])){  
    $user_name = $_POST["user"];
    $password = $_POST["pwd"];
    $usernames = file('functions/usernames.txt', FILE_IGNORE_NEW_LINES);
    $passwords = file('functions/pwds.txt', FILE_IGNORE_NEW_LINES);
    
    // if good create sesh
    if (in_array($user_name, $usernames) && in_array($password, $passwords) && !empty($_POST["remember"])){
        setcookie ("user",$user_name,time()+ 3600);
	    setcookie ("pwd",$password,time()+ 3600);
	    echo "Cookies Set Successfuly";
        echo "<script> window.open('portal.html', '_self') </script>";      
    }
    else if (in_array($user_name, $usernames) && in_array($password, $passwords)){
        setcookie("user","");
	    setcookie("pwd","");
	    echo "Cookies Not Set";
        echo "<script> window.open('portal.html', '_self') </script>";        
    }
    // if invalid credentials, error
    else{
        echo "<script> alert('Invalid credentials.') </script>";
    }

}
?>


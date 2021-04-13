<!DOCTYPE html>

<?php
session_start();
// if not logged in, ask for it
if(!isset($_SESSION['username'])){
	header("location: loginp.php");
}
?>

<html lang="en">
<head>
  <title>CYPRESS - Personal Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<?php
// get user details from files
 $username = $_SESSION['username'];
 $usernames = file("functions/usernames.txt", FILE_IGNORE_NEW_LINES);
 $fnames = file("functions/fnames.txt", FILE_IGNORE_NEW_LINES);
 $lnames = file("functions/lnames.txt", FILE_IGNORE_NEW_LINES);
 $found = false;
 // finding the index number, to be used for all info
 for ($userindx = 0; $userindx < count($usernames); $userindx++) {
     if ($usernames[$userindx] == $username) {
        $found = true;
        break;
     }
 }

 // print details in a nice table
 if ($found) {
    printf("
    <div class='container' style='margin-top:40px'>
        <div class='row'>
            <div class='col-xs'>
                <h2 style='margin-top:10px;''>Personal Information</h2>
                <p>Some of the information can be edited in the edit tab.</p>            
                <table class='table table-hover'>
                    <tbody>
                        <tr>
                            <th>Username</th>
                            <td>%s</td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td>%s</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>%s</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ",$usernames[$userindx], $fnames[$userindx], $lnames[$userindx]);
 }
?>
<a class="nav-link" href="profileEdit.php">Edit</a>
<a class="nav-link" href="functions/profiledel.php">Delete Profile (IRREVERSIBLE!)</a>
</body>
</html>
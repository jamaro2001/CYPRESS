<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <div class="flex-container" style="justify-content:space-between;">
       <h3>CYPRESS</h3>
       <h3>City of Toronto</h3>
    </div>
    <hr>
  </header>
    
    <div class="row">
        <div class="col-12 text-center">
             <h1 class="mainHeads">CYPRESS Vote</h1>
        </div>
    </div>
    
    <div class="container">
        <h6>
            You are currently at the Cypress voting page. Please select all of the problems you are experiencing below.
        </h6>
    </div>
    
    <div class="container">
        <div class="col-xs">
        <form action="" method="post" name="login_form">
            <select id="problems" name="problems">
                <option value="problem1">Problem 1</option>
                <option value="problem2">Problem 2</option>
                <option value="problem3">Problem 3</option>
                <option value="problem4">Problem 4</option>
                <option value="problem5">Problem 5</option>
            </select>
  
            <button type="submit" class="btn btn-danger">Submit</button>
        </form> 
        </div>
    </div>
</body>
</html>

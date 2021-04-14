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
                <input type="checkbox"id="customCheck1" name="customCheck1" value="1">
                <label class="custom-control-label" for="customCheck1">Problem 1</label> <br>
            
                <input type="checkbox"id="customCheck2" name="customCheck2" value="2">
                <label class="custom-control-label" for="customCheck2">Problem 2</label> <br>
            
                <input type="checkbox"id="customCheck3" name="customCheck3" value="3">
                <label class="custom-control-label" for="customCheck3">Problem 3</label> <br>
				
                <input type="checkbox"id="customCheck4" name="customCheck4" value="4"> 
                <label class="custom-control-label" for="customCheck4">Problem 4</label> <br>
				
                <input type="checkbox"id="customCheck5" name="customCheck5" value="5">
                <label class="custom-control-label" for="customCheck5">Problem 5</label> <br>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form> 
        </div>
    </div>
</body>
</html>

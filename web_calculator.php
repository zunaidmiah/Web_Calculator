<?php
include_once "calculator_function.php";
include_once "calculator_js.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Web Calculator</title>
  </head>
  <body onload="isShow()">
  <div class="container mt-5">
  <hr><hr>
  <h2 style="text-align:center;">Web Calculator</h2>
  <hr><hr><br>
    <form method="post">
    <div class="form-group">
        <label for="number1">Enter One Number</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="number1" placeholder="Enter one number" required>
        </div>
    <div class="form-group">
        <label for="number2">Enter One Number</label>
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="number2" placeholder="Enter another number" required>
        </div>
    <div class="form-group">
        <label for="operator">Enter What You Want</label>
        <input type="text" class="form-control" name="operator" id="operator" aria-describedby="operator" placeholder="Enter operator like +, -, *, /, %" onblur="checkType()" required>
        <small id="emailHelp" class="form-text text-muted">Enter the operation what you want.</small>
        <span id="showMsg" style="color:red;"></span>
    </div>
    
    <button type="submit" class="btn btn-primary" id="button" disabled="true">Submit</button>
    <br><br>
    <div class="form-group" id="output" style="display:;">
        <label for="number2">The Output is</label>
        <input type="hidden" id="check" value="<?php echo $status; ?>" >
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="number2" placeholder="<?php echo $output; ?>" disabled>
        </div>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
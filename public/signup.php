<?php require_once('../private/initialize.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo WWW_ROOT.'/styles/signup.css'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>SignUp</title>
</head>

<body>
    <div id="center">
        <p id="headline">SignUp</p>
        <form action="<?php echo WWW_ROOT.'/userdata.php'?>" method="POST" class="myform">
            <div class="form-group row mycontent">
                <label for="myusername" class="col-sm-2 col-form-label mylabel">username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="myusername" style="width: 50% !important;" required>
                </div>
            </div>
            <div class="form-group row mycontent">
                <label for="myemail" class="col-sm-2 col-form-label mylabel">email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="myemail" style="width: 50% !important;" required>
                </div>
            </div>
            <div class="form-group row mycontent">
                <label for="mypassword" class="col-sm-2 col-form-label mylabel">password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="mypassword" style="width: 50% !important;" required>
                </div>
            </div>
            <div>
                <input type="submit" value="SignUp" class="btn buttons">
            </div>
        </form>
    </div>
</body>
</html>
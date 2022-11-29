

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="myStyle.css">
  </head>
  <body>

    <div class="container">
      <div class="title">
        <div class="row">
          <h2>Final project in Programming</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h4>Welcome to my Website</h4>
          <h5>Please Login</h5>
        </div>
        <div class="col-md-6"  style="background-color: lightgray; padding: 2em; margin-top: 2em; border-radius: 2em;">
          <form class="" action="login.php" method="post">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label" for="">username</label>
                <input class="form-control" type="text" name="username" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="form-label" for="">password</label>
                <input class="form-control" type="password" name="password" value="">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="button" style="width: 100%;">Login</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
<?php
// TODO: finish the login form
// IDEA: rounded edge
 ?>
    <script src="bootstrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <script src="jquery/jquery-3.6.1.min.js" charset="utf-8"></script>
  </body>
</html>

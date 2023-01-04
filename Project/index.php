

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
          <form class="" action="#" method="post" id="login_form">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label" for="">username</label>
                <input class="form-control" type="text" name="username" id="username">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="form-label" for="">password</label>
                <input class="form-control" type="password" name="password" id="password">
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

    <script src="bootstrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <script src="jquery/jquery-3.6.1.min.js" charset="utf-8"></script>


    <script type="text/javascript">
      $(document).ready(function(){

        $('#login_form').submit(function(event){
          let username = $('#username').val();
          let password = $('#password').val();
          event.preventDefault();
          $.getJSON('myJson2.json', function(value){
            let i = 0;
            let user_level = "";
            $.each(value.users, function(key, val){
              if (username == val.username && password == val.password) {
                console.log('user found in index: '+ i );
                user_level = val.user_level;
                i = 0;
                return false;//break the loop
              }else {
                i++;
              }
            })
            if (i != 0) {
              console.log('checked: '+ i+ ' times user not found.');
            }else {
              console.log('user level is: ' + user_level);
            }

          });
        });
      });
    </script>
  </body>
</html>

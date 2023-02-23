
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <script type="text/javascript" src=""></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <style media="screen">
  
    </style>
  </head>
  <body>

  <h1>Add Data</h1>
    <form id="myForm">
      <label for="">Name</label>
      <input type="text" id="name" name="name">
      <br>
      <br>
      <label for="">Gender</label>
      <input type="text" id="gender" name="gender">
      <br>
      <br>
      <label for="">Food</label>
      <input type="text" id="food" name="food">
      <br><br>
      <button type="submit" id="btn1">Add Data!</button>
    </form>

    <br><hr>
    <a href="view_data.php">View Data</a>



    <script type="text/javascript">

      $(document).ready(function(){
        $('#myForm').submit(function(event){
          event.preventDefault();
          $.ajax({
            type: "POST",
            url: "save_data.php",
            data: $("#myForm").serialize(),
            success: function(res){
              // let data = JSON.parse(res);
              console.log(res);
            },
            complete: function(){
              // console.log('Operation complete');
            }

          })
  
        });
      });
    
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>View Data</title>

</head>
<body>
    <center><h1>Data Table</h1></center>
    <div class="row" style="margin-left: 5%;">
        <div class="col-md-2">
            <a href="index.php" class="btn btn-primary" style="width: 100%;">Add Data</a>
        </div>
    </div>
    <div class="row" style="padding: 5%;">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                    </tr>
                </thead>
            <tbody>
        
        </tbody>
    </table>
        </div>
    </div>
   
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>


<script>
    $(document).ready(function(){
        $.ajax({
            url: "get_data.php",
            dataType: 'json',
            success: function(res){
                let data = JSON.parse(res);
                let row='<tr>';//create the heading of row
           
                $.each(data, function (index, val) {
                    // each iteration of data from json file and append each element to each row
                    row += '<td>'+val.name+'</td>';
                    row += '<td>'+val.age+'</td>';
                    row += '<td>'+val.gender+'</td>';
                    row += '<td>'+val.birthday+'</td>';
                    row += '</tr>';
                });
                $('tbody').append(row);
            },
            complete: function(){
              console.log('Operation complete');//log after the ajax completed
            }

        })
    })
</script>
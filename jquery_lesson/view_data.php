<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <title>View Data</title>
    <style>
        table{
            width: 100%;
        }

        th{
            background-color: gray;
            color: white;
        }
        td{
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Data Table</h1>
    <a href="index.php">Add Data</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Food</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</body>
</html>


<script>
    $(document).ready(function(){
        $.ajax({
            url: "get_data.php",
            dataType: 'json',
            success: function(res){
                let data = JSON.parse(res);
                let row='<tr>';
           
                $.each(data, function (index, val) {
                    // each iteration
                    row += '<td>'+val.name+'</td>';
                    row += '<td>'+val.gender+'</td>';
                    row += '<td>'+val.food+'</td>';
                    row += '</tr>';

                    // console.log(val);
                });
                $('tbody').append(row);
            },
            complete: function(){
              // console.log('Operation complete');
            }

        })
    })
</script>
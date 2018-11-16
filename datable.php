<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table" id="table-pro">
        <thead>
            <tr>
                <th>Tble</th>
                <th>ss</th>
                <th>sss</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>


<script src="./public/js/jquery.min.js"></script>
<script src="./public/js/bootstrap.js"></script>
<script src="./public/js/dataTables.min.js"></script>

<script>
    $(function () { 

        myfunction();
    }); 
    var myfunction=function(){
        $('#table-pro').DataTable();
    }
</script>
</body>
</html>
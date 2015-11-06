<?PHP header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class='container'>
    <table class='table table-striped table-bordered table-hover'>
        <tr>
            <th>#</th>
            <th>FIO</th>
            <th>Position</th>
            <th>Experience </th>
            <th>Action</th>
        </tr>
        <tr>
            <td class="noclick">1</td>
            <td>Иванов Иван Иванович</td>
            <td>Директор</td>
            <td>2</td>
            <td class="noclick"><button class="btn btn-warning">Удалить</button></td>
        </tr>
        <tr>
            <td class="noclick">2</td>
            <td>Петров Петр Петрович</td>
            <td>Зам. директора</td>
            <td>5</td>
            <td class="noclick"><button class="btn btn-warning">Удалить</button></td>
        </tr>
    </table>
    <div class='row pull-right'>
        <form class="form-inline" action='' method='post'>
            <input type='button' class='btn btn-large btn-primary' value='+Добавить строку' onclick="addRow()">
            <input type='submit' class='btn-large btn-success'>
        </form>
    </div>
</div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

<?php
//include connection file
require_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operating using PDO Extension</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>PHP CRUD Operating using PDO Extension</h3>
                </hr>
                <a href="insert.php">
                    <button class="btn btn-primary">Insert record</button>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>#</th>
                                <th>First Name</th>
                            </thead>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
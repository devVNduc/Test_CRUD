<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation using PDO Extension</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Insert Record | PHP CRUD Opeeration using PDO Extension</h3>
                <hr />
            </div>
        </div>
    </div>
    <form name="insertrecord" method="post">
        <div class="row">
            <div class="col-md-4">
                <b>First Name</b>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="col-md-4">
                <b>Last Name</b>
                <input type="text" name="lastname" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <b>Email id</b>
                <input type="email" name="emailid" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <b>Contactno</b>
                <input type="contactno" name="contactno" class="form-control" maxlength="10" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <b>Address</b>
                <textarea name="address" class="form-control" required></textarea>
            </div>
        </div>
        <div class="row" style="margin-top: 1%;"></div>
        <div class="col-md-8">
            <input type="submit" name="insert" value="Submit">
        </div>
    </form>
</body>

</html>
<?php
//include database connection file
require_once 'dbconfig.php';
if (isset($_POST['insert'])) {
    //posted values
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
    //query for insertion
    $sql = "INSERT INTO tblusers(Firstname,Lastname,Emailid,ContactNumber,Address) VALUES(:fn,:ln,:eml,:cno,:adrss)";
    //prepare Query for Execution
    $query = $dbh->prepare($sql);
    //Blind the parameters
    $query->bindParam(':fn', $fname, PDO::PARAM_STR);
    $query->bindParam(':ln', $lname, PDO::PARAM_STR);
    $query->bindParam(':eml', $emailid, PDO::PARAM_STR);
    $query->bindParam(':cno', $contactno, PDO::PARAM_STR);
    $query->bindParam(':adrss', $address, PDO::PARAM_STR);
    //Query execution
    $query->execute();
    //check that inserttion really worked,If the last inserted id is greater than zero,the insertion work
    $lastInsertid = $dbh->lastInsertId();
    //message for successfully
    if ($lastInsertid) {
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong, please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}


?>
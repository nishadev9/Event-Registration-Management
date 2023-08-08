<?php
include  'db_con.php';
//$id = $_GET['rid'];
if (isset($_POST['update'])) {
    
    $rid = $_POST['rid'];
     $event_id = $_POST['event_id'];
     $uid = $_POST['uid'];
     $username=$_POST['username'];
     $ename=$_POST['ename'];
     $contact=$_POST['contact'];
    $sql = "update `registration` set rid='$rid', event_id='$event_id', uid='$uid',username='$username',ename='$ename',contact='$contact' where `rid` = '$rid'" ;
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:post_register.php'); 
    }
    
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 py-5">
                        <h3>EDIT</h3>

                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="rid">Registration ID</label>
                                        <input type="number" class="form-control" placeholder="rid" id="rid" name="rid">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="event_id">Event ID</label>
                                        <input type="number" class="form-control" placeholder="event_id" id="event_id" name="event_id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group first">
                                        <label for="user_id">User ID</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name = "username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="ename">Event name</label>
                                        <input type="text" class="form-control" placeholder="ename" id="ename" name="ename">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group last mb-3">
                                        <label for="contact">contact</label>
                                        <input type="number" class="form-control" placeholder="contact" id="contact" name="contact">
                                    </div>
                                </div>
                                
                            
            
                            <button type="submit" href="post_register.php" class="btn px-5 btn-primary" name="submit">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
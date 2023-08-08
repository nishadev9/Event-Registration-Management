<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        body{
background-image: url(reg.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}
    </style>
</head>
<body>
<?php
include_once 'db_con.php';
if(isset($_POST['submit']))
{    
     $rid = $_POST['rid'];
     $event_id = $_POST['event_id'];
     $user_id = $_POST['user_id'];
     $username=$_POST['username'];
     $ename=$_POST['ename'];
     $contact=$_POST['contact'];

     $sql = "INSERT INTO registration (rid,event_id,user_id,username,ename,contact)
     VALUES ('$rid','$event_id','$user_id','$username','$ename','$contact')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>




    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Registration</p>
                    <form action="post_register.php" method="post">
                        <div class="form-group">
                            <label>Registration ID</label>
                            <input type="number" name="rid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Event Id</label>
                            <input type="number" name="event_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Id</label>
                            <input type="number" name="uid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Event Name</label>
                            <input type="text" name="ename" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="number" name="contact" class="form-control">
                        </div>
                        <a href="count.php" >Click here to find number of registrations per Event</a> <br/>
                        <a class="btn btn-primary btn-sm" name ="update" href="update.php">UPDATE</a><br/>
                        
                        <a class="btn btn-primary btn-sm" name ="delete" href="delete1.php" >DELETE</a><br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

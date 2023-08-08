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
     $eid = $_POST['eid'];
     $time = $_POST['time'];
     $place = $_POST['place'];
     $date=$_POST['date'];
    
     $sql = "INSERT INTO venue (eid,time,place,date)
     VALUES ('$eid','$time','$place','$date')";
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
                    <p>Venue</p>
                    <form action="venue.php" method="post">
                        <div class="form-group">
                            <label>Event ID</label>
                            <input type="number" name="eid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" name="place" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="datetime-local" name="date" class="form-control">
                        </div>
                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

<?php 
include  'db_con.php';
if(isset($_POST['delete'])){
          
    $rid = $_POST['rid'];   
    $sql = " delete from registration where rid = '".$rid."'";
    $results = mysqli_query($con,$sql);
    if($results){
        header('location:post_register.php'); 
    }
else{
    die(mysqli_error($con));
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
    <style>
        input[type="number"] {
            width: 400PX;
            display: block;
            background:lightgreen;
            color:black; 
            text-align:justiy; 
            font-size: 150%;
        }
          
        form {
            display:table-cell; 
            width:50%; 
            padding:10px; 
        }
        body {
            background-image: url();
            
        }
    </style>
</head>


<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 py-5">
                        <h3>DELETE</h3>

                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="rid">Registration ID</label>
                                        <input type="number" class="form-control" placeholder="delete" id="rid" name="rid">
                                        <button type="submit" href="delete1.php" class="btn px-5 btn-primary" name="delete">DELETE</button>
                                    </div>
                                </div>

</body>
</html>
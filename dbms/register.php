<?php 

    require_once("db_con.php");
    $query = " select * from events ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    body{
background-image: url(reg.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}
</style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Event ID </td>
                                <td> Event Name </td>
                                <td> Event Manager </td>
                                <td> Date and Time </td>
                                <td> Amount  </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $event_id = $row['event_id'];
                                        $ename = $row['ename'];
                                        $e_manager = $row['e_manager'];
                                        $date_time = $row['date_time'];
                                        $amount=$row['amount']
                                        //$status=$row['status']
                            ?>
                                    <tr>
                                        <td><?php echo $event_id ?></td>
                                        <td><?php echo $ename ?></td>
                                        <td><?php echo $e_manager ?></td>
                                        <td><?php echo $date_time ?></td>
                                        <td><?php echo $amount ?></td>
                                        
                                       
                                        <td><a href="post_register.php" class="btn btn-danger">register</a></td>
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
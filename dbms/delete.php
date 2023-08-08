<?php 

    require_once("db_con.php");
    if(isset($_GET['delete']))
         {
             $rid = $_GET['delete'];
             $query = " delete from registration where rid = '".$rid."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:post_register.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
            header("location:post_register.php");
         }

         ?>
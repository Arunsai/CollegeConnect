<?php

$con=msqli_connect("dbname","","","collegeConnect");

if(mysqli_connect_error())
{
echo "connection Error";
}

else    {
    $stm="select * from users";
    $result=mysqli_query($con,$stm);
    while($row=mysqli_fetch_array($result))
    {
        if($x=$row['usename']){
            
            if($y=$row['password']  {
            ?> <script> window.location.assign("./allusers.php");</script> <?php
            }
        }
    }
}
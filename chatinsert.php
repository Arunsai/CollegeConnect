<?php   
session_start();
            $z=$_SESSION['un'];
            $x=$_SESSION['ch1'];
            $y=$_SESSION['chatter'];
    // Create connection
$con=mysqli_connect("localhost","root","arun1234","college_connect");
              
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $msg = $_POST['msg'];
        if(!empty($msg))
        {    
    
$sql = "INSERT INTO ${x}_${y} (uname, message, time) VALUES ('$z','$msg', CURRENT_TIMESTAMP)";
            
        if(mysqli_query($con,$sql))
          {
        
          }
        else
            {
                echo "some error in posting the message.<br>".mysqli_error($con);
                echo "reload??";
            }
        } 
        else
            {
            }
     
//CLOSE CONNECTION
        mysqli_close($con);
  ?>
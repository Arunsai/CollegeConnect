<html>
<body>
<?php
    session_start();
    $x=$_SESSION['ch1']=$_SESSION['un'];
    $y=$_SESSION['chatter']=$_GET['ch'];


 $con=mysqli_connect("localhost","root","arun1234","college_connect");
        
      
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        
        $sql = "SELECT * FROM ${x}_${y} ";

if (mysqli_query($con,$sql))
  {
   // echo $sql;
    //echo "<br>table exists and ready to open<br>";
    
    ?>
       <script> window.location.assign("./chatpage.php");</script>
<?php
    
}


else 
  {
    //echo "reverse table might exist... checking...<br>";
    $sql = "SELECT * FROM ${y}_${x} ";
    if(mysqli_query($con,$sql)) {
        
      //  echo "yeah.. reverse table exists. <br>";
        $_SESSION['ch1']=$y;
        $_SESSION['chatter']=$x; 

    ?>
    
       <script>window.location.assign("./chatpage.php");</script>
<?php
    }
    else    {
        
          //  echo "sorry.. no table exists.. preparing to create new table.<br>";
            $x=$_SESSION['ch1'];
            $y=$_SESSION['chatter'];
        
         //create table
        $sql="CREATE TABLE ${x}_${y}(uname VARCHAR(20),message longtext,img longblob,time timestamp)";

// Execute query
        if (mysqli_query($con,$sql))
        {
          //  echo "Table ${x}_${y} created successfully. <br>";
           ?>
       <script>window.location.assign("./chatpage.php");</script>
<?php
        }
        else
        {
           echo "mistake at some place.. cant create new table. <br>";
            echo "Error creating table: " . mysqli_error($con);
        }

        
        
    }
    
  }


//CLOSE CONNECTION
        mysqli_close($con);




?>    
    
</body>
</html>
<html>
    <head>
        
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>   
      
<style>
        
        .c_side {
            margin-top:2px;
            float:left;
            width:75%;
            font-family: sans-serif;
            font-size: 13px;
            padding:4px;
            background-color:#b0e0e6;
            display:block;
        }

        .u_side {
            float:right;
            margin-top:2px;
            width:75%;
            font-family: sans-serif;
            font-size: 13px;
            padding-left:6px;
            background-color:#b0e0e6;
            display:block;
            
        }
        .n_side {
            display:none;
        }
        
        .h  {
            font-family: verdana;
            color: blue;
            font-size: 15px;
            text-transform: capitalize;
        }
    
        #bottom {
            width:90%;
            height:20px;
            background-color:#b0e0e6;
            position:relative;
        }
    
    
</style>
<script>         
        window.setInterval("location.reload(true)",5000); 
</script>
</head>
<body>
<?php       error_reporting(0);
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

        $sql = "SELECT * FROM ${x}_${y} ORDER BY time desc";
        $result = mysqli_query($con,$sql);    

while($row = mysqli_fetch_array($result))
  {
    if($z==$row['uname'])    {
        echo "<div class='u_side'>";
        echo "<span class='h'>". $row['uname']. ":</span><br>";
        echo  $row['message']."<br>";
        echo  $row['time']."<br>";
        echo "</div>";    
    }
    
    
    if($z!=$row['uname'])    {
        echo "<div class='c_side'>";
        echo "<span class='h'>". $row['uname']. ":</span><br>";
        echo  $row['message']."<br>";
        echo  $row['time']."<br>";
        echo "</div>";    
    }
    
        
  }

//CLOSE CONNECTION
        mysqli_close($con);
  ?>
    
        
    
        </body>
    </html>
<html>
<body>
<?php
        session_start();
        $x=$_POST["un"];
        $y=$_POST["upwd"];

$con=mysqli_connect("localhost","root","arun1234","college_connect");

        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql = "SELECT username,password FROM users_table ";
        $result = mysqli_query($con,$sql);    

while($row = mysqli_fetch_array($result))
{
    $p=$row['username'];
    if($x==$row['username'])    {
            if($y==$row['password'])    {
                $_SESSION['un'] = $x;
                ?> <script>window.location.assign("./allusers.php");</script> <?php    
            }                      
    }                 
}
//CLOSE CONNECTION
        mysqli_close($con);

  ?>
<script> // window.location.assign("./index.html");</script>
    
   
</body>
</html>

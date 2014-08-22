<html>
    
    <head>
    <title>College Connect </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="home.css" rel="stylesheet" type="text/css"/>
	<link href='favicon.ico' rel='icon' /> 
</head>
    
    <style>
    #m {
            position: relative;
            left:50%;
            margin-left: -200px;
            color: #ededed;
            text-align: center;
            font-family: 'Stencil';
            font-size: 24px;
            font-weight: bold;
        }

    </style>    
<body>

<?php    

            session_start();
            $x=$_POST['un'];
            $y=$_POST['upwd'];


// Create connection
$con=mysqli_connect("mysql1.000webhost.com","a5518890_arun","radha12345","a5518890_cc");
              
// Check connection
        if (mysqli_connect_errno())  {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $sql = "SELECT username FROM users_table ";
        $result = mysqli_query($con,$sql);         

while($row = mysqli_fetch_array($result))
{
    $p=$row['username'];
    
    if($x==$row['username'])    {
        echo "<span id='m'> username already exists.. please choose unique username </span>";
        ?> <script>window.location.assign("./regpage.php");</script> <?php
    }                 
}



$sql = "INSERT INTO reg_table(username, password, doj) VALUES ('$x','$y', CURRENT_TIMESTAMP)";
        if(mysqli_query($con,$sql))
          {
            echo "<span id='m'>Successfully Registered.<br> Your request is pending. <br> It may take a while. <br> Please revert back after some time.</span>";
          }
        else
            {
                echo "some error in posting the message.<br>".mysqli_error($con);
                echo "reload??";
            }
?>
</body>
</html>
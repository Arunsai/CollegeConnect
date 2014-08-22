<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="home.css" rel="stylesheet" type="text/css"/>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>   
    <style>
        body    {
            min-width:240px;
	        min-height:320px;
             margin  : 0px;
        }
        
    #specific_user {
        height : 35px;
        width : 100%;
        font-size : 24px;
        font-family: 'verdana', sans-serif;
        color : green;
        background : #ededed;
        border-style:solid;
        border-width:0px 0px 1px 0px;
        border-color : #600E0C;
        text-transform: capitalize;
        transition  : all 0.3s ease-in-out 0s;
    }
        
    
    #specific_user:hover  {
        cursor      : pointer;
        background  : #ddd;
        color       : #600E0C;
    }
    
    #all_users_heading
        height      : 50px;
        width       : 100%;
        text-align  : center;
        background  : gray;
        font-size   : 40px;
        font-family : 'Stencil';
        font-weight : bold;
        color       : white;
    }
        
    #letter {
        width   : 35px;
        height  : 35px;
        background: #FF0000;
        font-size   : 28px;
        padding :0px;
        margin: 0px;
        font-family: 'Stencil';
        color   : white;
        text-transform: capitalize;        
    }
    
    </style>
    <script>
        function carry_name(chatter)   {  
           
            window.location.assign("chatvalidate.php?ch="+chatter);
        }
                       
    
    </script>
    
    
</head>
<body>
    <div id="all_users_heading" > ALL USERS </div>
     <div class="nav_tabs" >
         <img src="images/home.png" id="menuicon" style="margin-right:0px" onclick="loader()" />
			<span id="s1" >
		 <img src="images/grps.png" onclick="grps()" />
		 <img src="images/logout.png" onclick="lout()" />
		 <img src="images/back.png" onclick="backoff()" />
					</span>	
    </div>
    
<?php
// Create connection
        $con=mysqli_connect("localhost","root","arun1234","college_connect");
        session_start();
        $x=$_SESSION['un'];
      
// Check connection 
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql = "SELECT username,first FROM `users_table` ORDER by username";
        $result = mysqli_query($con,$sql);
        
               
        while($row = mysqli_fetch_array($result))
          { if($x!=$row['username'])    {
    ?>
            <div id='specific_user' onclick='carry_name("<?php   echo $row['username'];  ?>")'>
                <span id="letter"><?php    echo $row['first'];  ?> </span>
    <?php   echo $row['username'];  ?>
            </div>
    <?php    }    }

//CLOSE CONNECTION
        mysqli_close($con);
?>
        
</body>
</html>
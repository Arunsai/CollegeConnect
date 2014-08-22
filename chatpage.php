<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="home.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        
    <style>
        
        #frm {
            border: solid 1px #600E0C;
            color: #A6120D;
            font-family: 'Agency FB', sans-serif;
            font-weight: bold;
            font-size:20px;
            padding:10px;
            width:85%;
            float:left;
            margin-top:-15px;
        
        }
        
        #frm :focus {
         border: solid 5px #600E0C;  
         
        }            
        </style>   
        <script>
            function onGo(){
setTimeout(function(){document.getElementsByTagName('iframe')[0].src=document.getElementsByTagName('iframe')[0].src; document.getElementById("frm").value="";},800);  
            }
			
        </script> 
</head>
    
<body>
    <form action="./chatinsert.php" method="post" onsubmit="onGo()" target="myFrame">
            <input type="text" name="msg" id="frm" />
     </form>
            <div class="nav_tabs" >
				<img src="images/home.png" id="menuicon" style="margin-right:0px" onclick="loader()" />
					<span id="s1" >
						 <img src="images/all.png" onclick="au()" />
						 <img src="images/grps.png" onclick="grps()" />
						 <img src="images/logout.png" onclick="lout()" />
						 <img src="images/back.png" onclick="backoff()" />
					</span>	
            </div>
    
    
    <iframe src="chat.php" width="100%" height="90%" id="box" frameborder="0" style="margin:0px; padding:0px"></iframe>

    <iframe name="myFrame" width="0%" height="0%" frameborder="0"></iframe>

</body>
</html> 
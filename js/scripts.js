				function loader()	{
                        $("#frm").hide(1000);
					  $("#s1").show(1000);
					  $("#menuicon").hide(1000);
                        $("#sub").hide(1000);
                        
				} 
			
			function au()	{
			window.location.assign("./allusers.php");
			}

			function grps()	{
			window.location.assign("./groups.php");
			}

			function lout()	{
			 window.close();
			}
			
			function backoff()	{
						$("#s1").hide(1000);
						$("#menuicon").show(1000);
                        $("#frm").show(1000);
                        $("#sub").show(1000);
			
			}			


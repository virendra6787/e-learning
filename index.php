<!DOCTYPE html>
<html>
    <head>
	<style>
	b{color:red;}
	</style>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />        
        <!-- Theme style -->
        <link href="css/admin.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="height50"></div>
    <div class="margin text-center"><img src="images/logo.png"></div>
       
	   
		</div>		
        <div class="form-box" id="login-box">
            <div class="header">Admin Login</div>
            <form action="admin.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control user_text" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control password_text" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                        <button type="submit" class="btn btn-success pull-right">Login</button>
                    </div>
                </div>
                
            </form>

            <div class="margin text-center">
                <span><a href="#">HELP! forgot my password!</a></span><br > 
				<?php
	    if(isset($_GET['mes']) && $_GET['mes']==0){
			echo "<b>"."Unauthorized User"."</b>";
			
		}
	 
	 ?>
            </div>
        </div>
        
        
<div class="height50"></div>
<!--<footer>Copyright &copy;2015 Education Game. All rights reserved.</footer>-->

        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-ui-1.10.3.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js" type="text/javascript"></script>        
     
    </body>
</html>

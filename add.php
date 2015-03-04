<?php 
 session_start();
 
 if(!isset($_SESSION['uname'])){
	header("location:index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!--font-awesome-->
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />        
        <!-- Ionicons -->
        <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/admin.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="images/logo_inner.png" style="margin-bottom:7px;">	
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                <ul class="nav navbar-nav">                
                    <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['uname']?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-gray">
                                    <img src="images/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        hi <?php echo $_SESSION['uname']?>                                        
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Admin</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                </ul>
                    
                    
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="images/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['uname']?></p>

                            <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li> 
                       <li class="treeview">                     
                         
						<?php
						$db_server              = 'localhost';                 // DB Server Address
                        $db_user                = 'root';                   // DB Username
                        $db_pass                = '';                   // DB Password
                        $db_database            = 'pearltech';              // Database Name
                        $link = mysqli_connect("$db_server", "$db_user", "$db_pass", "$db_database");

                                 /* check connection */
                  if (mysqli_connect_errno()) {
                     printf("Connect failed: %s\n", mysqli_connect_error());
                     exit();
                  }
				  $query="SELECT * FROM admin_module";
				  
                  $result = mysqli_query($link,$query);
						while($row = mysqli_fetch_array($result)){
					    $id = $row['id'];
					
                            echo '<a href="add.php?mod_id='.$row['id'].'">'.'<i class="fa fa-folder-open"></i>'.$row['content_name'].'<i class="fa fa-angle-left pull-right"></i></a>';
							$query1="SELECT * FROM admin_sub_module WHERE admin_id = '$id'";
					        $result1 = mysqli_query($link,$query1);
							?>
                               
                            <ul class="treeview-menu">
							<?php
							while($row1 = mysqli_fetch_array($result1)){
                          
							echo '<li><a href="add.php?mod_sub_id='.$row1['id'].'">'.'<i class="fa fa-angle-double-right"></i>'.$row1['sub_content_name'].'</a></li>';
					         }
							 ?>
							  </ul>
							  <?php	}	
							    mysqli_close($link);
							  ?>
                        </li>
   
           
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Dashboard</h1>                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <!--<h3 class="box-title">Table title</h3>-->
                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                            <?php      
							     if(isset($_GET['mod_id'])){
									  $mod_id = $_GET['mod_id'];
									  echo $mod_id;
								 }
								 if(isset($_GET['mod_sub_id'])){
									  $mod_sub_id = $_GET['mod_sub_id'];
									  echo $mod_sub_id;
								 }
                                							
							?>        
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        
        <footer>Copyright &copy;2015 Education Game. All rights reserved.</footer>

 		<!-- jQuery 2.0.2 -->
        <script src="js/jquery.js"></script>       
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <!-- DATA TABES SCRIPT -->
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/dataTables.bootstrap.js" type="text/javascript"></script> 
        <!-- AdminLTE App -->
        <script src="js/app.js" type="text/javascript"></script>
        
         <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>  
        

    </body>
</html>
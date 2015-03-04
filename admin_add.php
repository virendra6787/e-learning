<?php 
include_once("includes/header.php");
include_once("includes/left_side.php");

?>
<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Welcome To Admin Panel</h1>
                    
					
                </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
         
            <!-- /.box-header --> 
            <!-- form start -->
		
            <div class="col-md-6">
              <form role="form" id="admin" class="formular" action="insert_admin.php" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First name*</label>
                    <input type="text" class="form-control validate[required]" name="f_name" value="" placeholder="Enter first name" data-prompt-position="bottomLeft">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last name*</label>
                    <input type="text" class="form-control validate[required]" name="l_name" value="" placeholder="Enter last name" data-prompt-position="bottomLeft">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address*</label>
                    <input type="email" class="form-control validate[required,custom[email]]" name="email" value="" id="exampleInputEmail1" placeholder="Enter email" data-prompt-position="bottomLeft">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password*</label>
                    <input class="form-control validate[required]" type="password" name="password" id="password" value="" placeholder="Password" data-prompt-position="bottomLeft">
                  </div>
                                 <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password*</label>
                    <input class="form-control validate[required]" type="password" name="password2" id="password2" value="" placeholder="confirm Password" data-prompt-position="bottomLeft">
                  </div>
         
                  <div class="form-group">
                    <label for="exampleInputEmail1">User name*</label>
                    <input type="text" class="form-control validate[required]" name="u_name" id="" value="" placeholder="Enter user name" data-prompt-position="bottomLeft">
             
                <!-- /.box-body -->
                
                <div class="box-footer">
                  <button type="submit" name="submit"> Submit</button>
                  <button>Cancel</button>
                </div>
              </form>
		        <div style="color:green">
		
		          <?php 
	 	             		
	               if(isset($_GET['pass']) && $_GET['pass']==0){
			           echo "<b>"."Password Does't Match."."</b>";
			
		            }
	               
	               if(isset($_GET['pass']) && $_GET['pass']==1){
			           echo "<b>"."Admin Is created sucessfully."."</b>";
			
		            }
	 	            
		          ?>
		
		
		
		       </div> 
            </div>
		
            <div class="clearfix">  
		     
			</div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
<?php include_once("includes/footer.php"); ?>

 

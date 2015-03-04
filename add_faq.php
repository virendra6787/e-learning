 <?php 
include_once("includes/header.php");
include_once("includes/left_side.php");
?> 
  
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add FAQ</h1>
      <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        
                    </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
           
            <!-- /.box-header --> 
            <!-- form start -->
            <div class="col-md-6">
              <form role="form" id="admin" class="formular" method="post" action="save.php">
                <div class="box-body">
                 
                  <div class="form-group">
                    <label>Question*</label>
                    <input type="text" class="form-control validate[required]" id="" placeholder="question" data-prompt-position="bottomLeft" name="question">
                  </div>                  
                  <div class="form-group">
                    	<label>Answer*</label>
                    	<textarea id="faq_answer" name="faq_answer" style="width:500px;">
		     					<?php 
		     						//get_content($_GET['page']);
		     						
		     						
		     				  	?>
		     				</textarea>
		     				<script>
								CKEDITOR.replace( 'faq_answer', {
									fullPage: true,
									allowedContent: true,
									extraPlugins: 'wysiwygarea',
									width: '650px'
								});
							</script>                    
                  </div>
                </div>
                <!-- /.box-body -->
                
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Submit</button>                  
                </div>
              </form>
			   <div style="color:green">
		
		          <?php 
	 	             		
	                   if(isset($_GET['pass']) && $_GET['pass']==1){
			           echo "<b>"."Data Is updated sucessfully."."</b>";
			
		            }
	 	            
		          ?>
		
		
		
		       </div> 
            </div>
            <div class="clearfix">
			
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


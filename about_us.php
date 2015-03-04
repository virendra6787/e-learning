<?php 
include_once("includes/header.php");
include_once("includes/left_side.php");
include_once("includes/function.php");
?>                       
           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>About Us Edit</h1>
                   
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                               
                                <div class="box-body">
                                    <form role="form" id="form1" action="about_content.php" method="post">
                                        <!-- text input -->
                                      
                                        
                                        <div class="form-group">
                                            <label>Content</label>
                                            
                                       
                                        <textarea id="about_content" name="about_content" style="width:500px;">
		     					<?php 
								    if(isset($_GET['page'])){
		     						  get_content($_GET['page']);
		     						
		     						}
		     				  	?>
											</textarea>
											<script>
												CKEDITOR.replace( 'about_content', {
													fullPage: true,
													allowedContent: true,
													extraPlugins: 'wysiwygarea',
													width: '650px'
												});
											</script>                    
                                        </div>
                                        
                                        <button class="btn btn-success">Submit</button>
                                       

                                        <!-- select -->
                                       
                                        
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php include_once("includes/footer.php"); ?>
        

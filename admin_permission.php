<?php 
include_once("includes/header.php");
include_once("includes/left_side.php");
?>  

           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>View CMS Content Details</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
                        <li><a href="#">CMS</a></li>                       
                        <li class="active">CMS Content Details</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header" >
                                    <!--<h3 class="box-title">Table title</h3>-->
                                    <button type="submit" class="btn btn-default">Select All</button>
                                    <button type="submit" class="btn btn-default">Clear All</button>
                                    <button type="submit" class="btn btn-default pull-right">Back</button>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table cellpadding="10">
                                        <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Master Management</td>                                            
                                        </tr>
                                         <tr>
                                            <td><input type="checkbox"></td>
                                            <td> User Management</td>                                            
                                        </tr>
                                         <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Site Managment</td>                                            
                                        </tr> 
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Loan Managment</td>                                            
                                        </tr> 
                                        <tr>
                                        <td colspan="2">
                              <button type="submit" class="btn btn-success">Set Permission</button></td>
                                        </tr>                                      
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php include_once("includes/footer.php"); ?>
       

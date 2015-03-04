<?php 
include_once("includes/header.php");
include_once("includes/left_side.php");
?>  
           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>View FAQ </h1> 
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <!--<h3 class="box-title">Table title</h3>-->
                                  
                                <div class="box-body">
                                
                                    <table id="example1" class="table table-bordered table-hover">
                                    
                                        <thead>
                                        <tr>
                                                <th colspan="5"> <div class="pull-right legend_div">
                                                <i class="fa fa-check"></i> Active &nbsp;
                                                <i class="fa fa-times"></i> Inactive &nbsp;
                                                <i class="fa fa-search"></i> View &nbsp;
                                                <i class="fa fa-pencil"></i> Edit &nbsp;
                                                <i class="fa fa-trash-o"></i> Delete &nbsp;
                                                </div></th>                   
                                            </tr>
                                            <tr>
                                            <th width="5%"><input type="checkbox" /></th>
                                                <th width="8%">Sr. No.</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th width="15%">Action</th>                                                
                                            </tr>	
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td><input type="checkbox" /></td>
                                                <td>1</td>
                                                <td>this is dummy?</td>
                                                <td>dummy means dummy</td>
                                                <td>
                                                <a href="javascript:void(0);"><i class="fa fa-check"></i></a>&nbsp;&nbsp;
                                                <a href="javascript:void(0);"><i class="fa fa-search"></i></a>&nbsp;&nbsp;
                                                <a href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                                                
                                                
                                                </td>                                                
                                            
                                        </tbody>
                                        <!--<tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                            </tr>
                                        </tfoot>-->
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php include_once("includes/footer.php"); ?>
        

     
        <footer>Copyright &copy;Chepall Technologies Pvt. Ltd.</footer>

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
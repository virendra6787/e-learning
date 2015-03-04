<?php
include_once("includes/db.php");
				  $query="SELECT * FROM admin_module";
				  
                  $result = mysqli_query($link,$query);
						while($row = mysqli_fetch_array($result)){
					    $id = $row['id'];
					         echo '<li class="treeview">';
                            echo '<a href="home.php?mod_id='.$row['id'].'">'.'<i class="fa fa-folder-open"></i>'.$row['content_name'].'<i class="fa fa-angle-left pull-right"></i></a>';
							$query1="SELECT * FROM admin_sub_module WHERE admin_id = '$id'";
					        $result1 = mysqli_query($link,$query1);
?>
                               
                            <ul class="treeview-menu">
					<?php
							while($row1 = mysqli_fetch_array($result1)){
                             
							echo '<li><a href="'.$row1['sub_url'].'?page='.$row1['page'].'">'.'<i class="fa fa-angle-double-right"></i>'.$row1['sub_content_name'].'</a></li>';
					         }
					 ?>
							  </ul>
							  <?php	 echo '</li>'; }	
							         mysqli_close($link);
							  ?>
                        </li>
   
           
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

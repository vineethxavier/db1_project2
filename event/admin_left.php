 <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/logo.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Welcome, Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                  
                    <ul class="sidebar-menu">
                     
                       <li class="">
                            <a href="home.php?event">
                                <i class="fa fa-user"></i>
                               <?php
							   if(isset($_GET['event']))
							   {
								   ?>
                                <span style="color:#F00;"><b>EVENT</b></span>
                               <?php
							   }
							   else
							   {
							   echo '<span>EVENT</span>';
							   }
							   ?>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           
                        </li>
                         <li class="">
                            <a href="home.php?dash">
                                <i class="fa fa-user"></i>
                               <?php
							   if(isset($_GET['view_event']))
							   {
								   ?>
                                <span style="color:#F00;"><b>EVENT VIEW</b></span>
                               <?php
							   }
							   else
							   {
							   echo '<span>EVENT VIEW</span>';
							   }
							   ?>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           
                        </li>
                         
                        
                        
                   
                   

                            </ul>
                        </li>  
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
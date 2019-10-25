
<?php 
include 'db.php';

echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                   
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link">Sankofa Photography</a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                   




                <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="flaticon-edit-2"></i>
                                <span>Gallery</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="adproduct.php"> Add image </a>
                            </li>
                            <li>
                                <a href="viewcategory.php"> View Image </a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Messages</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                           
                            <li>
                                <a href="viewsuppliers.php"> View  messages</a>
                            </li>

                           
                            
                            
                           
                           
                        </ul>
                    </li>



                    


                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Orders</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">
                          
                            
                            <li>
                                <a href="creport.php"> View    orders</a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>


                    
                     <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="fa fa-cog"></i>
                                <span>Settings</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            
                            
                            <li>
                                <a href="apptitle.php"> App title </a>
                            </li>
                            <li>
                                <a href="user.php"> User </a>
                            </li>

                          
                            <li>
                                <a href="currency.php"> Currency </a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>
                    
                </ul>
            </nav>

        </div>'
               ;?>
 <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Welcome 
							   <?php 
									if(isset($_SESSION['uname']))
									{
										echo $_SESSION['uname'];
										
									}
									else
										echo "Guest";
								?>   
							   </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Profile
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="ChangePass.php">Change Password</a></li>
                                <li><a href="Profile.php">Manage Profile</a></li>
                                
                              </ul>
                        </li>
                        <li>
                            <a href="Logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
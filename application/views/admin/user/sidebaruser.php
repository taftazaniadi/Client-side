<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" style="background-color: purple;">
                <div class="image">
                    <?php
                    $user = $this->ion_auth->get_user_id();
                    $CI =& get_instance();
                    $CI->load->model('modelkrt');
                    $result = $CI->modelkrt->selectchangefoto('users',"where id = $user ");
                    ?>
                    <?php if (empty($result->foto)): ?>
                        <img src="<?php echo site_url("assets/fotoprofil/default.jpg"); ?>" width="48" height="48" alt="User" />
                    <?php else: ?>
                        <img src="<?php echo site_url("assets/fotoprofil/".str_replace(" ", "_",preg_replace('/\s+/', '_', $result->foto))); ?>" width="48" height="48" alt="User" />
                    <?php endif ?>
                </div>
                <div class="info-container" >
                <?php 
               
                    $user = $this->ion_auth->get_user_id(); ?>
                    <div class="email"><?php echo $this->ion_auth->user()->row()->first_name ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo site_url("auth/edit_userorma/$user")?>"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="<?php echo site_url("user/changefoto/")?>"><i class="material-icons">person</i>Change Foto</a></li>
                            <li><a href="<?php echo site_url('auth/logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo site_url('user');?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!--  -->
                    <li class="active">
                        <a href="<?php echo site_url('user/search');?>">
                            <i class="material-icons">search</i>
                            <span>Search</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">folder</i>
                            <span>PENGAJUAN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url('user/lihat'); ?>">
                                    <span>History Pengajuan Peminjaman</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/pengajuan'); ?>">
                                    <span>Tambah Pengajuan Peminjaman</span>
                                </a>
                            </li> 
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">Dashboard USER - Dept KRT</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.4
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

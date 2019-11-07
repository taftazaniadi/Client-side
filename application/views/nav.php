
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('welcome'); ?>">
                <strong>KRT AMCC</strong>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('welcome'); ?>/#news">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('welcome'); ?>/#pinjam">Cara Pinjam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('welcome'); ?>/#kontak">Kontak</a>
                    </li>
                    <li class="nav-item dropdown btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                        <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="<?php echo base_url('welcome/visi') ?>">Visi dan Misi</a>
                            <a class="dropdown-item" href="<?php echo base_url('welcome/struktur') ?>">Struktut Organisasi</a>
                            <a class="dropdown-item" href="<?php echo base_url('welcome/album') ?>">Album Photo</a>
                            <a class="dropdown-item" href="<?php echo base_url('welcome/sejarah') ?>">Sejarah</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-toggler-right">
                 <?php $this->load->library('ion_auth'); if  ($this->ion_auth->logged_in()): ?>
                    <li class="nav-item dropdown btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><b><?php echo $this->ion_auth->user()->row()->username ?> </b></strong> </a>
                        <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                            <?php if ($this->ion_auth->is_admin()) {
                                echo "<a class='dropdown-item' href='".site_url('admin')."'>Dashboard</a>";
                            } else {
                                echo "<a class='dropdown-item' href='".site_url('user')."'>Dashboard</a>";
                            }
                            ?>
                            <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>">Logout</a>
                           
                        </div>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">

                        <a href="<?php echo site_url('auth'); ?>" class="nav-link">Login</a>

                    </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar
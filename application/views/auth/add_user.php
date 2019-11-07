<?php 
    $this->load->view('admin/header','refresh');
    $this->load->view('admin/nav','refresh');
    $this->load->view('admin/sidebar','refresh');
?>

    <section class="content">
        <div class="container-fluid">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH USERS</h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('berita/doadd'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required placeholder="judul">
                                    </div>
                                    <div class="help-info">Judul berita</div>
                                </div>
                                
                                
                                <div class="form-group form-float">
                                    <div class="form-line">      
                                        <textarea id="ckeditor" name="isi" type="text" required="" class="form-control" placeholder="isi"></textarea>
                                    </div>
                                    <div class="help-info">Isi</div>
                                </div>
                            
                              <!--   <button class="btn btn-primary waves-effect" type="submit" name="simpa">SUBMIT</button> -->
                              <input type="submit" name="simpan" class="btn btn-primary waves-effect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/footer','refresh'); ?>

    <script src="<?php echo site_url('assets/admin/'); ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo site_url('assets/admin/'); ?>js/pages/forms/editors.js"></script>


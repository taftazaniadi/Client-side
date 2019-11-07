<style type="text/css">
.main { text-align:center; font:12pt Arial; width:100%; height:auto; }
.eventtext {width:100%; margin-top:20px; font:10pt Arial; text-align:left; line-height:25px; background-color:#EDF4F8;
padding:5px; border:1px dashed #C2DAE7;}
#mapa {width:100%; height:340px; border:5px solid #DEEBF2;}
ul {font:10pt arial; margin-left:0px; padding:5px;}
li {margin-left:0px; padding:5px; list-style-type:decimal;}
.code {border:1px dashed #cecece; background-color:#F7F7F7; padding:5px;}
.small {font:9pt arial; color:gray; padding:2px; }
.jimi { margin:0px;}
</style>

    <section class="content">
        <div class="container-fluid">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success') ?>
                        </div>    
                    <?php endif ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('danger') ?>
                        </div>    
                    <?php endif ?>
                    
                    <div class="card">
                        
                        <div class="header">
                            <h2>CHANGE FOTO PROFIL</h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('user/do_changefoto'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                        <?php if (empty($profil->foto)): ?>
                                        <img style="height: 150px; height: 120px;" src="<?php echo site_url('assets/fotoprofil/default.jpg'); ?>">    
                                        <?php else: ?>
                                        <img <img style="width: 150px; height: 120px;" src="<?php echo site_url("assets/fotoprofil/".str_replace(" ", "_",preg_replace('/\s+/', '_', $profil->foto))); ?>">
                                        <?php endif ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">      
                                        <input type="file" class="form-control" name="foto" required >
                                        </div>
                                    </div>
                                    
                                </div>                            
                              <input type="submit" name="simpan" class="btn btn-primary waves-effect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

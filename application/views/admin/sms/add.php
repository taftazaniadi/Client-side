    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KIRIM SMS </h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SMS
                                <small>Perhatikan dengan seksama</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('admin/send') ?>" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="id" value="<?php echo $kode ?>" required readonly />
                                            <input type="hidden" class="form-control" required="" name="users" value="<?php echo $users->id ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required="" readonly="" value="<?php echo $users->first_name ?>"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required="" readonly="" name="barang" value="<?php echo $barang->nama ?>" />
                                            <input type="hidden" class="form-control" required="" name="pengajuan" value="<?php echo $barang->id ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required="" readonly="" name="phone" value="<?php echo $users->phone ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required="" name="pesan" placeholder="isi pesan" />
                                        </div>
                                    </div>
                                     <div class="form-group">
                                            <input type="submit" name="simpan" value="Kirim" class="btn btn-primary waves-effect" align="center">
                                    </div>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
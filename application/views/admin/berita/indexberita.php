

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BERITA
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?php echo site_url('berita/add') ?>"><i class="material-icons">add_circle</i>Tambah Berita</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Judul</th>
                                        <th width="10%">Foto</th>
                                        <th width="15%">Isi</th>
                                        <th width="15%">Penulis</th>
                                        <th width="15%">Tgl Buat</th>
                                        <th width="15%">Terakhir Update</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Judul</th>
                                        <th width="5%">Foto</th>
                                        <th width="15%">Isi</th>
                                        <th width="10%">Penulis</th>
                                        <th width="10%">Tgl Buat</th>
                                        <th width="10%">Terakhir Update</th>
                                        <th width="10%">Action</th> 
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id'] ?></td>
                                       <td><?php echo $data['judul'] ?></td>
                                       <td><img style="width: 60px; height: 60px;" src="<?php echo site_url("assets/admin/images/berita/".str_replace(" ", "_",preg_replace('/\s+/', '_', $data['foto']))); ?>"><?php echo $data['foto'] ?></td>
                                       <td><?php echo substr($data['isi'],0,100)  ?></td>
                                       <td><?php echo $data['first_name'] ?></td>
                                       <td><?php echo $data['tgl_buat'] ?></td>
                                       <td><?php echo $data['tgl_update'] ?></td>
                                       <td>
                                           <a href="<?php echo site_url("berita/delete/{$data['id']}") ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"> <i class="material-icons" >delete</i> </a>
                                           <a href="<?php echo site_url("berita/edit/{$data['id']}") ?>"> <i class="material-icons" >edit</i> </a>
                                       </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

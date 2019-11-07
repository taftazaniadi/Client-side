

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENGEMBALIAN
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
                                        <th width="10%">Nama Barang</th>
                                        <th width="5%">ID Pengajuan</th>
                                        <th width="10%">Nama Peminjam</th>
                                        <th width="10%">UKM</th>
                                        <th width="5%">Tgl Kembali</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Nama Barang</th>
                                        <th width="5%">ID Pengajuan</th>
                                        <th width="10%">Nama Peminjam</th>
                                        <th width="10%">UKM</th>
                                         <th width="5%">Tgl Kembali</th>
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id_kembali'] ?></td>
                                       <td><?php echo $data['nama'] ?></td>
                                       <td><?php echo $data['id_pengajuan'] ?></td>
                                       <td><?php echo $data['first_name'] ?></td>
                                       <td><?php echo $data['company'] ?></td>
                                       <td><?php echo $data['tanggal_kembali'] ?></td>
                
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

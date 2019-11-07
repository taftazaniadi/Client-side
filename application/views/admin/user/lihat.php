

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HISTORY PEMINJAMAN SAYA
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
                                       <th width="5%">ID Barang</th>
                                        <th width="5%">ID Peminjaman</th>
                                        <th width="15%">Barang</th>
                                        <th width="5%">Qty</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Tgl Pemakaian </th>
                                        <th width="15%">Surat </th>
                                        <th width="15%">Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID Barang</th>
                                        <th width="5%">ID Peminjaman</th>
                                        <th width="15%">Barang</th>
                                        <th width="5%">Qty</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Tgl Pemakaian </th>
                                        <th width="15%">Surat </th>
                                        <th width="15%">Status</th>
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                 <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id_barang'] ?></td>
                                       <td><?php echo $data['id_pengajuan'] ?></td>
                                       <td><?php echo $data['nama'] ?></td>
                                       <td><?php echo $data['qty'] ?></td>
                                       <td><?php echo $data['tgl_pengajuan'] ?></td>
                                       <td><?php echo $data['tgl_pemakaian'] ?></td>
                                       <td><a href="<?php echo base_url('public/'.str_replace(" ", "_",preg_replace('/\s+/', '_', $data['surat']))) ?>"><?php echo $data['surat']; ?></a></td>
                                       <td>
                                           <a class=""><?php echo $data['status'] ?></a>
                                           <!-- <?php if ($data['status']=='terima'): ?><i class="large material-icons">print</i><?php endif ?> -->
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

<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENGAJUAN PEMINJAMAN TERKONFIRMASI
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Barang</th>
                                        <th width="10%">Peminjam</th>
                                        <th width="10%">UKM</th>
                                        <th width="15%">Qty</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Tgl Pemakaian </th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Barang</th>
                                        <th width="10%">Peminjam</th>
                                        <th width="10%">UKM</th>
                                        <th width="5%">Qty</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Tgl Pemakaian </th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>    
                                    </tr>
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id_pengajuan'] ?></td>
                                       <td><?php echo $data['nama'] ?></td>
                                       <td><?php echo $data['first_name'] ?></td>
                                       <td><?php echo $data['company'] ?></td>
                                       <td><?php echo $data['qty'] ?></td>
                                       <td><?php echo $data['tgl_pengajuan'] ?></td>
                                       <td><?php echo $data['tgl_pemakaian'] ?></td>
                                       <td>
                                           <a class="#"><b><?php echo $data['status'] ?></b></a>
                                       </td>
                                       <td>
                                           <a href="<?php echo site_url("admin/sms/{$data['id_users']}/{$data['id_pengajuan']}") ?>" class="btn btn-primary waves-effect">KIRIM SMS</a>
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

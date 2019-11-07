<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA HISTORY PENGAJUAN PEMINJAMAN
                            </h2>
                        </div>
                        <br><br>
                        <form action="<?php echo base_url('admin/list'); ?>" method="post">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                       <input type="date" name="start" class="form-control" value="<?php echo $start ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="end" class="form-control"  value="<?php echo $end ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <input id="clear" class="btn btn-danger" name="clear" type="submit" value="clear"> 
                                    </div>                                       
                                </div>                                
                            </form>
                            <br><br>
                        <div class="body">    
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Barang</th>
                                        <th width="5%">Qty</th>
                                        <th width="5%">UKM</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Surat </th>
                                        <th width="15%">Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Barang</th>
                                        <th width="5%">Qty</th>
                                        <th width="5%">UKM</th>
                                        <th width="15%">Tgl Pengajuan </th>
                                        <th width="15%">Surat </th>
                                        <th width="15%">Status</th>
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
                                       <td><?php echo $data['qty'] ?></td>
                                       <td><?php echo $data['company'] ?></td>
                                       <td><?php echo $data['tgl_pengajuan'] ?></td>
                                       <td><a href="<?php echo base_url('public/'.str_replace(" ", "_",preg_replace('/\s+/', '_', $data['surat']))) ?>"><?php echo $data['surat']; ?></a></td>
                                       <td>
                                           <a><b><?php echo $data['status'] ?></b>
                                           <?php if ($data['status']=='terima'): ?>
                                             <a href="<?php echo site_url("admin/pengembalian/{$data['id_pengajuan']}") ?>" class="btn btn-primary waves-effect"> PENGEMBALIAN</a>  
                                           <?php endif ?></a>
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

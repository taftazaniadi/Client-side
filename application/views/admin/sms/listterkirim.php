<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA SMS TERKIRIM
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Penerima</th>
                                        <th width="15%">Pesan</th>
                                        <th width="15%">Tgl Kirim SMS</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                       <th width="5%">ID</th>
                                        <th width="10%">Penerima</th>
                                        <th width="15%">Pesan</th>
                                        <th width="15%">Tgl Kirim SMS</th>
                                        <th width="15%">Action</th>     
                                    </tr>
                                    </tr> 
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id'] ?></td>
                                       <td><?php echo $data['phone'] ?></td>
                                       <td><?php echo $data['pesan'] ?></td>
                                        <td><?php echo $data['tgl'] ?></td>
                                       <td>
                                           <a href="<?php echo site_url("admin/deletesms/{$data['id']}") ?>" class="waves-effect" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                           <i class="material-icons" >delete</i> </a>
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

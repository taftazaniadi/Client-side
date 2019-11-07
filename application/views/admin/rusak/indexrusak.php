

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BARANG RUSAK
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?php echo site_url('rusak/add') ?>"><i class="material-icons">add_circle</i>Tambah Barang</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Nama</th>
                                        <th width="15%">Jumlah Rusak</th>
                                        <th width="15%">Satuan </th>
                                        <th width="15%">Total Barang</th>
                                        <th width="15%">Tempat</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="10%">Nama</th>
                                        <th width="15%">Jumlah Rusak</th>
                                        <th width="15%">Satuan </th>
                                        <th width="15%">Total Barang</th>
                                        <th width="15%">Tempat</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($datas as $data) { 
                                ?>   
                                    <tr>
                                       <td><?php echo $data['id_barang'] ?></td>
                                       <td><?php echo $data['nama'] ?></td>
                                       <td><?php echo $data['rusak'] ?></td>
                                       <td><?php echo $data['satuan'] ?></td>
                                       <td><?php echo $data['jumlah'] ?></td>
                                       <td><?php echo $data['tempat'] ?></td>
                                       <td>
                                           <a href="<?php echo site_url("rusak/delete/{$data['id_barang']}") ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"> <i class="material-icons" >delete</i> </a>
                                           <a href="<?php echo site_url("rusak/edit/{$data['id_barang']}") ?>"> <i class="material-icons" >edit</i> </a>
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

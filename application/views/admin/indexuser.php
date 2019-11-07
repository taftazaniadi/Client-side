<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <!-- <input type="text" name="mitch" id="mitch" class="form-controll"> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA BARANG DEPARTEMEN KERUMAHTANGGAAN <br>
                            <small>Silahkan cek status barang, apakah tersedia atau tidak tersedia.</small>
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th width="10%">Barang</th>
                                    <th width="15%">Qty</th>
                                    <th width="5%">Jml Baik</th>
                                    <th width="5%">Jml Rusak</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tfoot>

                                <tr>
                                    <th width="10%">Barang</th>
                                    <th width="15%">Qty</th>
                                    <th width="5%">Jml Baik</th>
                                    <th width="5%">Jml Rusak</th>
                                    <th width="15%">Status</th>
                                </tr>
                                </tr>

                            </tfoot>
                            <tbody>
                                <?php
                                foreach ($datas as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['jumlah'] ?></td>
                                        <td><?php echo $data['baik'] ?></td>
                                        <td><?php echo $data['rusak'] ?></td>
                                        <td>
                                            <a class=""><?php echo $data['keterangan']; ?>
                                                <?php if ($data['keterangan'] == 'pinjam')
                                                        echo $data['tgl_pengajuan'];
                                                    ?>
                                            </a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#mitch").keyup(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Spellcorrector/correct') ?>",
                data: {
                    keyword: $("#mitch").val()
                },
                dataType: "json",
                success: function(data) {

                }
            });
        });

    });
</script>
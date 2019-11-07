<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <form action="">
                            <h2 style="margin-bottom: 10px;">Search</h2>
                            <input type="text" name="search" class="form-control">
                            <button class="btn btn-success" style="margin-top: 20px;">Search</button>
                        </form>

                        <!-- <h2>
                                DATA BARANG DEPARTEMEN KERUMAHTANGGAAN <br>
                                <small>Silahkan cek status barang, apakah tersedia atau tidak tersedia.</small>
                            </h2> -->
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th width="10%">Barang</th>
                                    <th width="15%">Qty</th>
                                    <th width="5%">Satuan</th>
                                    <th width="15%">Tempat</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if (count($search) == 0) : ?>
                                    <?php if ($status == 'null') : ?>
                                        <tr>
                                            <td colspan="4"></td>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="4">Not Found</td>
                                        </tr>
                                    <?php endif ?>

                                <?php else :  ?>
                                    <?php foreach ($search as $key) : ?>
                                        <tr>
                                            <td width="10%"><?php echo $key['nama'] ?></td>
                                            <td width="15%"><?php echo $key['jumlah'] ?></td>
                                            <td width="5%"><?php echo $key['satuan'] ?></td>
                                            <td width="15%"><?php echo $key['tempat'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
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
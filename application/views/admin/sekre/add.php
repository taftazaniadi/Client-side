    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>INPUT DATA BARANG</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success') ?>
                        </div>    
                    <?php endif ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('danger') ?>
                        </div>    
                    <?php endif ?>
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>Perhatikan dengan seksama</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('sekre/doadd') ?>" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="id" value="<?php echo $barang ?>" required readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="users" class="form-control" required="" readonly="" value="<?php echo $this->ion_auth->user()->row()->first_name ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required="" name="nama" placeholder="Nama barang" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input required="" name="jumlahbaik"  type="number" min="0" value="0" id="jumlahbaik" class="form-control" placeholder="jumlah baik" />
                                            <div class="help-info">Jumlah baik</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <select name="satuan" class="form-control show-tick" required="">
                                            <option value="" readonly >-- satuan --</option>
                                            <option value="pcs">pcs</option>
                                            <option value="kg">kg</option>
                                            <option value="paks">paks</option>
                                            <option value="pasang">pasang</option>
                                            <option value="dus">dus</option>
                                            <option value="lembar">lembar</option>
                                            <option value="eksemplar">eksemplar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input  required="" name="jumlahrusak" type="number" id="jumlahrusak" min="0" value="0" class="form-control" placeholder="jumlah rusak" /> 
                                            <div class="help-info">Jumlah rusak</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input  required="" name="total" type="number" id="total" min="0" class="form-control" readonly="" />
                                            <div class="help-info"><font color="red">*readonly</font> Total Barang</div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row clearfix">
                                <!-- <div class="col-sm-12">
                                    <label>Keadaan</label>
                                    <div class="form-group">
                                    <input type="radio" name="kondisi" value="baik" id="baik" class="with-gap">
                                    <label for="baik">Baik</label>

                                    <input type="radio" name="kondisi" value="rusak" id="rusak" class="with-gap">
                                    <label for="rusak" class="m-l-20">Rusak</label>
                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <label>Keterangan</label>
                                    <div class="form-group">
                                    <input type="radio" name="keterangan" value="tersedia" id="tersedia" class="with-gap">
                                    <label for="tersedia">Tersedia</label>

                                    <input type="radio" name="keterangan" value="pinjam" id="pinjam" class="with-gap">
                                    <label for="pinjam">Di pinjam</label>

                                    <input type="radio" name="keterangan" value="hilang" id="hilang" class="with-gap">
                                    <label for="hilang">Hilang</label>
                                </div>
                            </div>  -->
                            
                                <div class="col-sm-12">
                                   
                                    <input type="submit" name="simpan" class="btn btn-primary waves-effect" align="center">
                                   
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

<script type="text/javascript">
$(document).ready(function () {
    $("#jumlahbaik, #jumlahrusak").on("change keyup paste", function(){
        var baik = $("#jumlahbaik").val();
        var rusak = $("#jumlahrusak").val();
        var hitung = parseInt(baik)+parseInt(rusak);
        $('#total').val(hitung);
        //console.log(hitung);
    });
});
</script>
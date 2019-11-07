    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT BARANG RUSAK</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT 
                                <small>Data barang RUSAK</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('rusak/doedit') ?>" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="hidden" class="form-control" name="id_details" value="<?php echo $rusak->id_details ?>" required readonly />
                                            <input type="text" class="form-control" name="id_barang" value="<?php echo $rusak->id_barang; ?>" required readonly />                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="users" class="form-control" required="" readonly="" value="<?php echo $this->ion_auth->user()->row()->first_name ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="<?php echo $rusak->nama ?>" class="form-control" required="" name="nama" placeholder="Nama barang" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                     <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input required="" name="jumlahrusak"  type="number" min="0" max="" id="rusak" class="form-control" value="<?php echo $rusak->rusak ?>" />
                                        <div class="help-info">Jumlah rusak</div>
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
                            <div class="col-sm-2" id="divbaik">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input readonly required="" name="jumlahbaik" type="number" id="baik" min="0" value="<?php echo $rusak->baik; ?>" class="form-control" /> 
                                        <div class="help-info"><font color="red">*readonly</font> Barang Baik</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2" id="divtotal">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  required="" name="total" type="number" id="total" min="0" class="form-control" readonly="" value="<?php echo $rusak->jumlah; ?>" />
                                        <div class="help-info"><font color="red">*readonly</font> Total Barang</div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                            <div class="row clearfix">
                                <!-- <div class="col-sm-12">
                                    <label>Keterangan</label>
                                    <div class="form-group">
                                    <input type="radio" name="keterangan" value="tersedia" id="tersedia" class="with-gap">
                                    <label for="tersedia">Tersedia</label>

                                    <input type="radio" name="keterangan" value="pinjam" id="pinjam" class="with-gap">
                                    <label for="pinjam">Di pinjam</label>

                                    <input type="radio" name="keterangan" value="hilang" id="hilang" class="with-gap">
                                    <label for="hilang">Hilang</label>
                                    </div>
                                </div> -->
                                <div class="col-sm-12">
                                    <label>Tempat</label>
                                    <div class="form-group">
                                    <input type="radio" name="tempat" value="camp" id="camp" class="with-gap">
                                    <label for="camp">Camp</label>

                                    <input type="radio" name="tempat" value="sekre" id="sekre" class="with-gap">
                                    <label for="sekre">Sekre</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="row clearfix">
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
        var varglobal = {};
        $("#rusak").on("change keyup paste", function(){
            var leng =  $('#total').val();
            var data = $('#rusak').val();
            varglobal.rusak = "<?php echo $rusak->rusak ?>";
            if (parseInt(data)>parseInt(leng)) {
                alert('Inputan anda melebihi batas maksimal dari ' +leng);  
                $('#rusak').val(varglobal.rusak);
            }

            var jmlkey = $("#rusak").val();
            var total = $('#total').val();
            var hitung = parseInt(total)-parseInt(jmlkey);
            varglobal.baik = "<?php echo $rusak->baik ?>";
            $('#baik').val(hitung);

            if (data==varglobal.baik) {
                 $('#baik').val(varglobal.baik);
            }

        });
    });
</script>
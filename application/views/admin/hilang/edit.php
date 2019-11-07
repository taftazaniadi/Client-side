    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT BARANG HILANG</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT 
                                <small>Data barang HILANG</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('hilang/doedit') ?>" method="post">
                           <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input autocomplete="off" type="hidden" class="form-control" name="id_hilang" value="<?php echo $hilang->id_hilang; ?>" />
                                            <input autocomplete="off" type="hidden" class="form-control" name="id_details" value="<?php echo $hilang->id_details; ?>" />
                                            <input id="country" autocomplete="off" type="text" class="form-control" name="id" required value="<?php echo $hilang->id_barang; ?>" />
                                            <ul class="dropdown-menu txtcountry" style="margin-left:50px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="users" class="form-control" required="" readonly="" value="<?php echo $this->ion_auth->user()->row()->first_name ?>" />
                                            <div class="help-info">Users</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="countrys" class="form-control" required="" name="nama" placeholder="Nama barang" value="<?php echo $hilang->nama; ?>" />
                                            <div class="help-info">Nama Barang</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max="" min="0" id="hil_baik" name="hil_baik" class="form-control" value="<?php echo $hilang->hilang_baik; ?>"/>
                                        </div>
                                        <div class="help-info">jml baik</div>
                                    </div>
                                </div>
                                <div class="col-sm-1" id="divbaik">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" value="<?php echo $hilang->baik; ?>" id="baik" name="baik" class="form-control" />
                                        </div>
                                        <div class="help-info"><font color="red">Barang baik</font></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max="" min="0" id="hil_rusak" value="<?php echo $hilang->hilang_rusak; ?>" name="hil_rusak" class="form-control" />
                                        </div>
                                        <div class="help-info">jml rusak</div>
                                    </div>
                                </div>
                                <div class="col-sm-1" id="divrusak">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" value="<?php echo $hilang->rusak; ?>" id="rusak" name="rusak"  class="form-control" />
                                        </div>
                                        <div class="help-info"><font color="red">Barang rusak</font></div>
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
                                <div class="col-sm-2" id="divjmlawal">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="jumlahawal" required="" readonly="" name="jumlahawal" value="<?php echo $hilang->jmlbarang; ?>" class="form-control"  />
                                        </div>
                                        <div class="help-info"><font color="red">*readonly</font> jumlah awal barang</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" id="divjmlsisa">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="jumlahsisa" required="" readonly="" value="<?php echo $hilang->jmlbarang; ?>" name="jumlahsisa" class="form-control" />
                                            <input type="hidden" id="total_hilang" required="" readonly="" name="total_hilang" class="form-control" />
                                        </div>
                                        <div class="help-info"><font color="red">*readonly</font> jumlah sisa barang</div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row clearfix">
                               <!--  <div class="col-sm-12">
                                    <label>Keadaan</label>
                                    <div class="form-group">
                                    <input type="radio" name="kondisi" value="baik" id="baik" class="with-gap">
                                    <label for="baik">Baik</label>

                                    <input type="radio" name="kondisi" value="rusak" id="rusak" class="with-gap">
                                    <label for="rusak" class="m-l-20">Rusak</label>
                                    </div>
                                </div>
 -->
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
        $("#hil_rusak").on("change keyup paste", function(){
            var leng =  <?php echo $hilang->rusak; ?>;
            var hil_rusak = <?php echo $hilang->hilang_rusak; ?>;
            var data = $('#hil_rusak').val();
            var jmlkey = $("#hil_rusak").val();
           // var total = varglobal.maxrusak;
            var tot_hilsak = <?php echo $hilang->rusak; ?>+<?php echo $hilang->hilang_rusak; ?>;
            if (data==hil_rusak) {
                $('#rusak').val(leng);
            }
            if (parseInt(data)>parseInt(leng)) {
                // var selisih = parseInt(hil_rusak)-parseInt(jmlkey);
                // var hitung = parseInt(leng)-parseInt(selisih);
                if (parseInt(leng)==0) {
                    var hitung = parseInt(hil_rusak)-parseInt(jmlkey);
                }else {
                 var selisih = parseInt(jmlkey)-parseInt(leng);
                var hitung = parseInt(leng)-parseInt(selisih);
                }
                // if (tot_hilbak==jmlkey) {
                //     var hitung = 0;
                // }
                $('#rusak').val(hitung);
            }else {
                var selisih = parseInt(hil_rusak)-parseInt(jmlkey);
                 var hitung = parseInt(leng)+parseInt(selisih);
                 $('#rusak').val(hitung);
            }
            if (parseInt(data)>parseInt(tot_hilsak)) {
                alert('Inputan anda melebihi batas maksimal dari '+tot_hilsak);  
                $('#hil_rusak').val(hil_rusak);
                $('#rusak').val(leng);
            }
        });
         $("#hil_baik").on("change keyup paste", function(){
            var leng =  <?php echo $hilang->baik; ?>;
            var hil_baik = <?php echo $hilang->hilang_baik; ?>;
            var data = $('#hil_baik').val();
            var jmlkey = $("#hil_baik").val();
           // var total = varglobal.maxrusak;
           var tot_hilbak = <?php echo $hilang->baik; ?>+<?php echo $hilang->hilang_baik; ?>;
            var hitung = parseInt(leng)-parseInt(jmlkey);
            $('#baik').val(hitung);
            if (data==hil_baik) {
                $('#baik').val(leng);
            }
             if (parseInt(data)>parseInt(leng)) {
                // var selisih = parseInt(hil_baik)-parseInt(jmlkey);
                // var hitung = parseInt(leng)-parseInt(selisih);
                if (parseInt(leng)==0) {
                    var hitung = parseInt(hil_baik)-parseInt(jmlkey);

                } else {
                    var selisih = parseInt(jmlkey)-parseInt(leng);
                var hitung = parseInt(leng)-parseInt(selisih);    
                }
                
                // if (tot_hilbak==jmlkey) {
                //     var hitung = 0;
                // }
                 $('#baik').val(hitung);
            }else {
                var selisih = parseInt(hil_baik)-parseInt(jmlkey);
                 var hitung = parseInt(leng)+parseInt(selisih);
                 $('#baik').val(hitung);
            }
            if (parseInt(data)>parseInt(tot_hilbak)) {
                alert('Inputan anda melebihi batas maksimal dari '+tot_hilbak);  
                $('#hil_baik').val(hil_baik);
                $('#baik').val(leng);
            }
        });
         $("#hil_baik, #hil_rusak").keyup( function(){
            var hil_baik = <?php echo $hilang->hilang_baik ?>;
            var hil_rusak = <?php echo $hilang->hilang_rusak ?>;
            var jmlhilangawal = parseInt(hil_baik)+parseInt(hil_rusak);
             var n1 = $("#hil_baik").val();
             var n2 = $("#hil_rusak").val();
             var jmlawal =  $("#jumlahawal").val();
             var result = parseInt(n2)+parseInt(n1);
              $("#total_hilang").val(result);
              console.log(jmlhilangawal);
              console.log(result);
              if (jmlhilangawal>result) {
                var selisih = parseInt(jmlhilangawal)-parseInt(result);
                var hitung = parseInt(jmlawal)+parseInt(selisih);
                $("#jumlahsisa").val(hitung);
              } else {
                var selisih = parseInt(jmlhilangawal)-parseInt(result);
                var hitung = parseInt(jmlawal)+parseInt(selisih);
                $("#jumlahsisa").val(hitung);
              }
            
            

        });
    }); 
</script>
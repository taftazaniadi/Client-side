    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>INPUT DATA BARANG</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>Perhatikan dengan seksama</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('hilang/doadd') ?>" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="iddet" autocomplete="off" type="hidden" class="form-control" name="id_details" />
                                            <input id="country" autocomplete="off" type="text" class="form-control" name="id" required placeholder="ketik ID/Nama barang" />
                                            <ul class="dropdown-menu txtcountry" style="margin-left:50px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button type="button" id="generate" class="btn btn-primary">Generate ID</button>
                                        <div class="help-info">Klik Generate jika pencarian ID Barang tidak di temukan</div>
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
                                            <input type="text" id="countrys" class="form-control" required="" name="nama" placeholder="Nama barang" />
                                            <div class="help-info">Nama Barang</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max="" min="0" value="0" id="hil_baik" name="hil_baik" class="form-control" />
                                        </div>
                                        <div class="help-info">jml baik</div>
                                    </div>
                                </div>
                                <div class="col-sm-1" id="divbaik">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max="" id="baik" name="baik" class="form-control" />
                                        </div>
                                        <div class="help-info"><font color="red">*Readonly barang baik</font></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max="" min="0" id="hil_rusak" value="0" name="hil_rusak" class="form-control" />
                                        </div>
                                        <div class="help-info">jml rusak</div>
                                    </div>
                                </div>
                                <div class="col-sm-1" id="divrusak">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" required="" max=""  id="rusak" name="rusak" class="form-control" />
                                        </div>
                                        <div class="help-info"><font color="red">*Readonly barang rusak</font></div>
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
                                            <input type="number" id="jumlahawal" required="" readonly="" name="jumlahawal" class="form-control"  />
                                        </div>
                                        <div class="help-info"><font color="red">*readonly</font> jumlah awal barang</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" id="divjmlsisa">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="jumlahsisa" required="" readonly="" name="jumlahsisa" class="form-control" />
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
        var varglobal = {};

        $("#country").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('hilang/GetBarangHilang') ?>",
                data: {
                    keyword: $("#country").val()
                },
                dataType: "json",
                success: function (data) {
                    if (data.length > 0) {
                        $('#DropdownCountry').empty();
                        $('#country').attr("data-toggle", "dropdown");
                        $('#DropdownCountry').dropdown('toggle');
                    }
                    else if (data.length == 0) {
                        $('#country').attr("data-toggle", "");
                    }
                    $.each(data, function (key,value) {
                        if (data.length >= 0)
                            $('#DropdownCountry').append('<li role="displayCountries" ><a iddet="'+ value['id_details'] +'" baik="'+ value['baik'] +'" rusak="'+ value['rusak'] +'"  jml="'+value['jumlah']+'" id="'+ value['id_barang'] +'"  value="'+ value['nama'] +'" role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['nama'] +"&nbsp;&nbsp;<font color='blue'><strong><b>"+ value['id_barang'] +'</b></strong></font>'+'</a></li>');
                    });
                }
            });
        });

        $('ul.txtcountry').on('click', 'li a', function () {
            var maxbaik = $(this).attr('baik');
            var maxrusak = $(this).attr('rusak');
            varglobal.maxbaik = $(this).attr('baik');
            varglobal.maxrusak = $(this).attr('rusak');
            varglobal.hil_baik = $(this).attr('hil_baik');
            varglobal.hil_rusak = $(this).attr('hil_rusak');
            var cekBrgHilang = $(this).attr('id');
            $('#country').val(this.id);
            $('#countrys').val($(this).attr('value'));
            $('#jumlahawal').val($(this).attr('jml'));
            $('#iddet').val($(this).attr('iddet'));
            $('#baik').val($(this).attr('baik'));
            $('#rusak').val($(this).attr('rusak'));
            $('#jumlahsisa').val($(this).attr('jml'));
            $("#baik").prop('readonly',true);
            $("#rusak").prop('readonly',true);
            
            $("#hil_baik").attr({
               "max" : maxbaik       // substitute your own
            });
            $("#hil_rusak").attr({
               "max" : maxrusak       // substitute your own
            });

            $.ajax({
                type: "GET",
                url: "<?php echo site_url('hilang/cekBrgHilang/"+cekBrgHilang+"') ?>",
                dataType: "json",
                success: function (data) {
                    if (data.id_barang!='') {
                        alert('Barang sudah ada pada Data Barang Hilang. Silahkan Edit Data barang tersebut.');
                        $('#country').val('');
                        $('#countrys').val('');
                        $('#baik').val('');
                        $('#rusak').val('');
                        $('#jumlahawal').val('');
                        $('#jumlahsisa').val('');
                    } else {

                    }
                }
            });
        });
        $.ajax({
                type: "GET",
                url: "<?php echo site_url('hilang/GenerateId') ?>",
                dataType: "json",
                success: function (data) {
                   $('#generate').on('click',function () {
                        //alert(data);
                       $('#country').val(data);
                       $('#countrys').val("");
                       $("#countrys").prop('readonly',false);
                       $("#divjmlsisa").hide();
                       $("#divbaik").hide();
                       $("#baik").hide().prop('required',false)
                       $("#divrusak").hide();
                       $("#rusak").hide().prop('required',false)
                       $("#divjmlawal").hide();
                       $('input#hil_rusak').removeAttr('max');
                       $('input#hil_baik').removeAttr('max');
                    });
                }
        });
  
        $("#hil_rusak").on("change keyup paste", function(){
            var leng =  $('#hil_rusak').attr('max');
            var data = $('#hil_rusak').val();
            var jmlkey = $("#hil_rusak").val();
            var total = varglobal.maxrusak;
            var hitung = parseInt(total)-parseInt(jmlkey);
            $('#rusak').val(hitung);
         
            if (parseInt(data)>parseInt(leng)) {
                alert('Inputan anda melebihi batas maksimal dari '+leng);  
                $('#hil_rusak').val(varglobal.hil_rusak);
                $('#rusak').val(varglobal.maxrusak);
            }
        });
        $("#hil_baik").on("change keyup paste", function(){
            var leng =  $('#hil_baik').attr('max');
            var data = $('#hil_baik').val();
            var jmlkey = $("#hil_baik").val();
            var total = varglobal.maxbaik;
            var hitung = parseInt(total)-parseInt(jmlkey);
            $('#baik').val(hitung);

            if (parseInt(data)>parseInt(leng)) {
                alert('Inputan anda melebihi batas maksimal dari '+leng);  
                $('#hil_baik').val(varglobal.hil_baik);
                $('#baik').val(varglobal.maxbaik);
            }
        });
       /* $("#hil_baik, #hil_rusak").on("change keyup paste", function(){
            var rusaka = $('#hil_rusak').val();
            var baika = $('#hil_baik').val();
            var total_det = parseInt(rusaka)+parseInt(baika);
            console.log(total_det);
        });*/
        $("#hil_baik, #hil_rusak").keyup( function(){

             var n1 = $("#hil_baik").val();
             var n2 = $("#hil_rusak").val();
             var jmlawal =  $("#jumlahawal").val();
             var result = parseInt(n2)+parseInt(n1);
              $("#total_hilang").val(result);
            var kurangi = parseInt(jmlawal)-parseInt(result);
              $("#jumlahsisa").val(kurangi);


        });

    });
     
</script>
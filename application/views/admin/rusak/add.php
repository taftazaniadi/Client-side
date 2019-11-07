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
                            <form action="<?php echo site_url('rusak/doadd') ?>" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="id_details" autocomplete="off" type="hidden" class="form-control" name="id_details" required placeholder="id_details" />
                                            <input id="country" autocomplete="off" type="text" class="form-control" name="id_barang" required placeholder="ketik ID/Nama barang" />
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
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="countrys" required="" name="nama" placeholder="Nama barang" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input required="" name="jumlahrusak"  type="number" min="0" max="" value="0" id="rusak" class="form-control" placeholder="jumlah rusak" />
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
                                        <input readonly required="" name="jumlahbaik" type="number" id="baik" min="0" value="0" class="form-control" placeholder="jumlah rusak" /> 
                                        <div class="help-info"><font color="red">*readonly</font> Barang Baik</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2" id="divtotal">
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
        var varbaik = {};
        $("#country").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('rusak/GetBarang') ?>",
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
                            $('#DropdownCountry').append('<li role="displayCountries" ><a data-iddet="'+ value['id_details'] +'" data-rusak="'+ value['rusak'] +'" data-val="'+ value['jumlah'] +'" id="'+ value['id_barang'] +'" jumlah="'+ value['jumlah'] +'"  value="'+ value['nama'] +'" baik="'+ value['baik'] +'" rusak="'+ value['rusak'] +'" role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['nama'] +"&nbsp;&nbsp;<font color='blue'><strong><b>"+ value['id_barang'] +'</b></strong></font>'+'</a></li>');
                    });
                }
            });
        });

        $('ul.txtcountry').on('click', 'li a', function () {
            var max = $(this).data('val');
            varglobal.rusak =  $(this).data('rusak');
            varbaik.baik = $(this).attr('baik');
            var iddet = $(this).data('iddet');
            $('#country').val(this.id);
            $('#id_details').val(iddet);
            $('#countrys').val($(this).attr('value'));
            $('#baik').val($(this).attr('baik'));
            $('#rusak').val($(this).attr('rusak'));
            $('#total').val($(this).attr('jumlah'));            
            $("#countrys").prop('readonly',true);
            $("#rusak").attr({
               "max" : max       // substitute your own
            });
        });
        $.ajax({
                type: "GET",
                url: "<?php echo site_url('rusak/GenerateId') ?>",
                dataType: "json",
                success: function (data) {
                   $('#generate').on('click',function () {
                       $('#country').val(data);
                       $('#countrys').val("");
                       $("#countrys").prop('readonly',false);
                       $("#divbaik").hide();
                       $("#divtotal").hide();
                       $('input#rusak').removeAttr('max');
                       $("#id_details").val("<?php echo $details; ?>");
                    });
                }
        });

        $("#rusak").on("change keyup paste", function(){
            var leng =  $('#rusak').attr('max');
            var data = $('#rusak').val();
            if (parseInt(data)>parseInt(leng)) {
                alert('Inputan anda melebihi batas maksimal dari '+leng);  
                $('#rusak').val(varglobal.rusak);
            }
            var jmlkey = $("#rusak").val();
            var total = $('#total').val();
            //var hitung = parseInt(varglobal.rusak)-parseInt(jmlkey);
            
            var hitung = parseInt(total)-parseInt(jmlkey);
            $('#baik').val(hitung);
            if (parseInt(jmlkey)==parseInt(varbaik.baik)) {
                 $('#baik').val(varglobal.rusak);
            }

        });
    });
</script>
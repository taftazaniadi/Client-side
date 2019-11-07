    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENGAJUAN</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>PENGAJUAN</small>
                            </h2>

                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('user/doaddpengajuan') ?>" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="id" value="<?php echo $id ?>" required readonly />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="users" class="form-control" required="" readonly="" value="<?php echo $this->ion_auth->user()->row()->first_name ?>" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required="" name="nim" placeholder="NIM anda ex: 15.01.3482" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="hidden" required="" id="countrys" name="id_barang" class="form-control" />

                                                <input style="background-color: white;" type="text" class="form-control" required="" id="country" autocomplete="off" name="barang" placeholder="search barang">
                                                <ul class="dropdown-menu txtcountry" style="margin-left:50px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry"></ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="jml" min="0" max="" required="" name="qty" class="form-control" placeholder="Jumlah peminjaman barang" />
                                            </div>
                                            <div class="help-info" id="ket_jml"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="deskripsi" class="form-control" placeholder="deskripsi peminjaman" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" required="" min="<?php echo date('Y-m-d'); ?>" name="tgl_pemakaian" class="form-control" placeholder="Tanggal Pemakaian" />
                                            </div>
                                            <div class="help-info">Tanggal Pemakaian barang</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="surat" required>
                                            </div>
                                            <div class="help-info">Surat (docx, pdf, png)</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <input type="submit" name="simpan" class="btn btn-primary waves-effect" align="center" oonclick="return confirm('Data yg di submit tidak dapat di EDIT. ');">

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
        $(document).ready(function() {
            $("#country").keyup(function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('user/GetCountryName') ?>",
                    data: {
                        keyword: $("#country").val()
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.length > 0) {
                            $('#DropdownCountry').empty();
                            $('#country').attr("data-toggle", "dropdown");
                            $('#DropdownCountry').dropdown('toggle');
                        } else if (data.length == 0) {
                            $('#country').attr("data-toggle", "");
                        }
                        $.each(data, function(key, value) {
                            if (data.length >= 0)
                                $('#DropdownCountry').append('<li role="displayCountries" ><a baik="' + value['baik'] + '" id="' + value['nama'] + '"  value="' + value['id_barang'] + '" role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['nama'] + "&nbsp;&nbsp;<font color='blue'><strong><b>" + value['keterangan'] + '</b></strong></font>' + '</a></li>');
                        });
                    }
                });
            });
            $('ul.txtcountry').on('click', 'li a', function() {
                $('#country').val(this.id);
                var maxbaik = $(this).attr('baik');
                $("#jml").attr({
                    "max": maxbaik // substitute your own
                });
                $('#countrys').val($(this).attr('value'));
                $("#ket_jml").text("Jumlah barang tersedia " + maxbaik);

            });

            $("#jml").on("change keyup paste", function() {
                var max = $('#jml').attr('max');
                var data = $('#jml').val();
                if (parseInt(data) > parseInt(max)) {
                    alert('Inputan anda melebihi batas maksimal dari ' + max);
                    $('#jml').val('');
                }
            });

        });
    </script>
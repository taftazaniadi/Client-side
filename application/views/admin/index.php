

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">JML PENGAJUAN</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $peminjaman ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH BARANG</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $barang ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH SMS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $sms ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH USER</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $users ?></div>
                        </div>
                    </div>
                </div>

                <!--  <form class="nav-link" action="<?php echo site_url('user/search') ?>" method="post" style="margin: 0px; padding: 0px;">
                    <div class="col-md-8" >
                    <input style=" background-color: white;" type="search"  id="country" autocomplete="off" name="search" placeholder="search barang">        
                    <ul class="dropdown-menu txtcountry" style="margin-left:50px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary"  style="height: 50px; width: 85px; -webkit-border-radius: 10em;
                        -moz-border-radius: 10em;
                        border-radius: 10em;">Cari</button>
                    </div>
                    <div class="col-md-2" style="float: left;">
                    </div>
                
                </form> -->
            </div>
                <!-- <div id="contain" style="background-color: blue; width: 700px; height: 800px;">hallo</div> -->
        </div>
    </section>
 <!--          
        <script type="text/javascript">
            $(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/GetCountryName') ?>",
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
                        $('#DropdownCountry').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['nama'] +"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='blue'><strong><b>"+ value['keterangan'] +'</b></strong></font>'+'</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());
    });
});
        </script> -->
        <script type="text/javascript">
 $(document).ready(function () {

$(function () {
    $('#contain').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Data Barang Departemen Kerumahtanggaan AMCC'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Persentase Barang',
            data: [
                    <?php 
                    // data yang diambil dari database
                    if(count($graph)>0)
                    {
                       foreach ($graph as $data) {
                       echo "['" .$data->tempat . "'," . $data->jumlah ."],\n";
                       }
                    }
                    ?>
            ]
        }]
    });
});
 
</script>
 


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->

            <div class="row clearfix" align="center">
                <form class="nav-link" action="<?php echo site_url('user/search') ?>" method="post" style="margin: 0px; padding: 0px;">
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
                
                </form>
            </div>
        </div>
    </section>


            
        <script type="text/javascript">
            $(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('user/GetCountryName') ?>",
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
        </script>
 
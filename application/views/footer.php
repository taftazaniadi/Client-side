<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                <h5 class="title">ABOUT KRT AMCC</h5>
                <ul>
                    <li><a href="<?php echo site_url('welcome/visi') ?>">Visi dan Misi</a></li>
                    <li><a href="<?php echo site_url('welcome/struktur') ?>">Struktur Organisasi</a></li>
                    <li><a href="<?php echo site_url('welcome/album') ?>">Album Kegiatan</a></li>
                </ul>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-lg-4 col-md-4 offset-lg-1">
                <h5 class="title">Suported By : </h5>
                &nbsp&nbsp&nbsp&nbsp&nbsp<img style="height: 80px; width: 100px;" src="<?php echo site_url('assets/user/img/amcc-logo.png') ?>">
                &nbsp&nbsp&nbsp&nbsp<img style="height: 80px; width: 180px;" src="<?php echo site_url('assets/user/img/amikom.png') ?>"> <br>
            </div>
            <!--/.Second column-->
            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-3 col-md-4">
                <h5 class="title">Follow me on</h5>
                <ul>
                    <li><a href="https://facebook.com/AmikomComputerClub/"><img width="30" height="30" src="<?php echo site_url('assets/user/img/fb.png') ?>"> Facebook</a></li>
                    <li><a href="https://www.instagram.com/amccamikom/"><img width="30" height="30" src="<?php echo site_url('assets/user/img/inst.png') ?>"> Instagram</a></li>
                    <li><a href="https://twitter.com/amcc_amikom"><img width="30" height="30" src="<?php echo site_url('assets/user/img/tw.png') ?>"> Twitter</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2019 Copyright: <a href="http://www.MDBootstrap.com" rel="nofollow"> Dept IT</a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?php echo site_url('assets/user/js/jquery-2.2.3.min.js') ?>"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo site_url('assets/user/js/tether.min.js') ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo site_url('assets/user/js/bootstrap.min.js') ?>"></script>

<!-- MDB core JavaScript -->

<script type="text/javascript" src="<?php echo site_url('assets/user/js/mdb.min.js') ?>"></script>


</body>

</html>
<script>
    function initMap() {
        var myLatLng = {
            lat: -7.7602576,
            lng: 110.4066187
        };

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 17
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Seketariat AMCC'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAELuqtE6zJbqaAfaQdJYDnLc72LbDrhvI&callback=initMap" async defer></script>
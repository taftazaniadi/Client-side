<?php $this->load->view('header.php'); ?>
<?php $this->load->view('nav.php'); ?>
<br>

    <!--Content-->
    <div class="container">
    <br> <br> <br>
    <h4 align="center"><strong><?php echo $datas->judul;?></strong></h4>
    <br> 
        <div class="row">
            <!--Second columnn-->
            <div class="col-lg-12">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="row" style="margin: 10px;">
                        <div class="col-lg-8">
                        <p class="card-text" >
                           <img style="width: 100%; height: 300px;" src="<?php echo site_url("assets/admin/images/berita/".str_replace(" ", "_",preg_replace('/\s+/', '_', $datas->foto))) ?>" class="img-fluid" alt=""> 
                        </p>
                        <p class="card-text" style="margin: 9px;">
                               <?php echo $datas->isi ?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="card-text">
                                <br>
                                <i class="material-icons">perm_identity</i> Penulis : <b> <?php echo $datas->first_name ?> <?php echo $datas->last_name ?> </b>
                                <br><i class="material-icons">date_range</i><b> <?php echo $datas->tgl_buat ?> </b>
                                <br>
                            </p>
                        </div>
                        
                    </div>
                    <!--/.Card image-->

                  <!-- -->
                </div>
                <!--/.Card-->
            </div>
        </div>
        <div id="disqus_thread"></div>
    </div>

<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://krt-sourcetika-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5915f433cc332e0012ea6ae9&product=sticky-share-buttons"></script>
    
   <!--Footer-->
    <?php $this->load->view('footer.php'); ?>
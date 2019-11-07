<?php $this->load->view('header.php'); ?>
<?php $this->load->view('nav.php'); ?>
   
<!-- <?php  foreach ($parsing->data as $data): ?>
	<img src="<?php echo $data->images->low_resolution->url ?>"> <br>
	<b><?php if (isset($data->tags[0])) {
		echo $data->tags[0]; 
	} ?></b> 
	
 <?php endforeach ?>
</ul> -->
<br><br><br><br>
<div class="row">
             <div class="col-lg-12" style="padding-left: 60px; padding-right: 60px;">
                <div class="row">
                <?php  foreach ($parsing->data as $data): ?>
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="<?php echo $data->images->low_resolution->url ?>" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->    
                        <?php if (isset($data->tags[0])&&isset($data->tags[1])): ?>
                        <div class="card-block">
                            <p align="center"><b><strong>
                            <?php echo $data->tags[1] ?>
                            </strong></b> <br>
                            Rp. <?php echo $data->tags[0] ?>
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->
                          <?php else: ?>

                          <?php endif ?>
                        </div> 
                        <!--/.Card-->
                    </div>
                <?php endforeach ?>
                <?php
                if (!(array) $parsing->pagination) {
                  echo "KEMBALI KE AWAL SAJA";
                } else {
                  echo '<a href="'.site_url("welcome/curlgitsdua/{$parsing->pagination->next_max_id}").'">NEXT </a>';
                
                }
                
                ?> 
               <!--  <?php
                   if (!(array) $parsing->pagination) {
                  echo "KEMBALI KE AWAL SAJA";
                }
                ?> -->
               <!--  <a href="<?php echo site_url("welcome/curlgitsdua/{$parsing->pagination->next_max_id}") ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"> <i class="material-icons" >delete</i> </a>
 -->
                
                </div>
             </div>            
        </div>
<?php $this->load->view('footer.php'); ?>
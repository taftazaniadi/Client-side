<?php 
    $this->load->view('admin/header','refresh');
    $this->load->view('admin/nav','refresh');
    $this->load->view('admin/sidebar','refresh');
?>

    <section class="content">
        <div class="container-fluid">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT BERITA</h2>
                        </div>
                        <div class="body">
                        <?php   $userid = $this->ion_auth->get_user_id(); ?>
                            <form action="<?php echo site_url("auth/edit_user/{$userid}"); ?>" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group form-float">
                                    <div class="form-line">      
                                        <?php
                                        print_r();
                                        ?>
                                    </div>
                                </div>
                                
                              <!--   <button class="btn btn-primary waves-effect" type="submit" name="simpa">SUBMIT</button> -->
                              <input type="submit" name="simpan" class="btn btn-primary waves-effect">

                              <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer','refresh'); ?>

    <script src="<?php echo site_url('assets/admin/'); ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo site_url('assets/admin/'); ?>js/pages/forms/editors.js"></script>


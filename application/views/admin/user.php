

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                USERS TABLE
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?php echo base_url('admin/tambah_user') ?>">TAMBAH USER</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="5%">No ID</th>
                                        <th width="10%">First Name</th>
                                        <th width="15%">Last Name</th>
                                        <th width="15%">Email </th>
                                        <th width="15%">Groups</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th> 
                                    </tr>
                                </thead>
                                <tfoot>
                                
                                    <tr>
                                        <th width="5%">No ID</th>
                                        <th width="10%">First Name</th>
                                        <th width="15%">Last Name</th>
                                        <th width="15%">Email </th>
                                        <th width="15%">Groups</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                
                                </tfoot>
                                <tbody>
                                <?php 
                                foreach ($users as $user) { 
                                ?>   
                                    <tr>
                                        <td><?php echo htmlspecialchars($user->id,ENT_QUOTES,'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8'); ?></td>
                                        <td>
                                        <?php foreach ($user->groups as $group):?>
                                                    <?php echo $group->name ?><br />
                                        <?php endforeach?>
                                        </td>
                                        <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id,'Active') : anchor("auth/activate/". $user->id, 'Deactivate');?></td>
                                        <td>
                                        <?php foreach ($user->groups as $group):?>
                                            <?php if ($group->name=='members'): ?>
                                            <a href="<?php echo base_url('admin/set_admin/').$user->id;?>" class="btn btn-info">set admin</a>    
                                            <?php else: ?>
                                             <a href="<?php echo base_url('admin/set_members/').$user->id;?>" class="btn btn-danger">set members</a>  
                                            <?php endif ?>

                                        <?php endforeach?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

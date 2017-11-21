<?php $this->load->view('templates/header'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Penyedia</h4>
                        <p class="category">Distro Productionhouse_pku</p>
                        <?php echo anchor(site_url("user/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $value->user_name; ?></td>
                                        <td><?php echo $value->password; ?></td>
                                        <td><?php echo $value->status; ?></td>
                                        
                                        <td><?php echo anchor(site_url('user/edit/'.$value->user_name),
                                            '<i class="fa fa-pencil"></i>',
                                            'class="btn btn-warning"'); ?>
                                        
                                        <?php echo anchor(site_url('user/delete/'.$value->user_name),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"'); ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


                <?php $this->load->view('templates/footer'); ?>     
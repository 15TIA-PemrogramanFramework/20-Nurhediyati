<?php $this->load->view('templates/header'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Penyedia</h4>
                        <p class="category">Distro Productionhouse_pku</p>
                        <?php echo anchor(site_url("penyedia/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID Penyedia</th>
                                <th>Nama Penyedia</th>
                                <th>Alamat Penyedia</th>
                               
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($penyedia as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value->nama_penyedia; ?></td>
                                        <td><?php echo $value->alamat_penyedia; ?></td>
                                        
                                        <td><?php echo anchor(site_url('penyedia/edit/'.$value->id_penyedia),
                                            '<i class="fa fa-pencil"></i>',
                                            'class="btn btn-warning"'); ?>
                                        
                                        <?php echo anchor(site_url('penyedia/delete/'.$value->id_penyedia),
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
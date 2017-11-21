<?php $this->load->view('templates/header'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Barang</h4>
                        <p class="category">Distro Productionhouse_pku</p>
                        <?php echo anchor(site_url("barang/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Penyedia Barang</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($barang as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value->nama_barang; ?></td>
                                        <td><?php echo $value->jenis_barang; ?></td>
                                        <td><?php echo $value->nama_penyedia; ?></td>
                                        <td><?php echo anchor(site_url('barang/edit/'.$value->id_barang),
                                            '<i class="fa fa-pencil"></i>',
                                            'class="btn btn-warning"'); ?>
                                        
                                        <?php echo anchor(site_url('barang/delete/'.$value->id_barang),
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
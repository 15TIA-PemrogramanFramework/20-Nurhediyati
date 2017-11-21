<?php $this->load->view('templates/header'); ?>    

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Karyawan</h4>
                        <p class="category">Distro Productionhouse_pku</p>
                        <?php if($this->session->userdata('status') == 'admin') { ?>
                        <?php echo anchor(site_url("karyawan/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
                        <?php } ?>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th>Alamat Karyawan</th>
                                <th>No.Telp Karyawan</th>
                                <?php if($this->session->userdata('status') == 'admin') { ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </thead>
                            <tbody>
                                <?php foreach ($karyawan as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value->nama_karyawan; ?></td>
                                        <td><?php echo $value->alamat_karyawan; ?></td>
                                        <td><?php echo $value->notelp_karyawan; ?></td>
                                        <?php if($this->session->userdata('status') == 'admin') { ?>
                                        <td><?php echo anchor(site_url('karyawan/edit/'.$value->id_karyawan),
                                            '<i class="fa fa-pencil"></i>',
                                            'class="btn btn-warning"'); ?>
                                        
                                        <?php echo anchor(site_url('karyawan/delete/'.$value->id_karyawan),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"'); ?></td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


                <?php $this->load->view('templates/footer'); ?>     
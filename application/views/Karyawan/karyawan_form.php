<?php $this->load->view('templates/header'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <h4 class="title"></h4>
                </div>
                <div class="content">
                <form action="<?php echo $action; ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama" value="<?php echo $nama_karyawan; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat Karyawan</label>
                                    <input type="text" name="alamat_karyawan" class="form-control" placeholder="Alamat" value="<?php echo $alamat_karyawan; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No.Telp Karyawan</label>
                                    <input type="text" name="notelp_karyawan" class="form-control" placeholder="No Telp" value="<?php echo $notelp_karyawan; ?>">
                                </div>
                            </div>
                        </div>



                        <input type="hidden" name="id" value="<?php echo $id_karyawan; ?>">
                        <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

                        <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel
                        </a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
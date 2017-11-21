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
                                    <label>Nama Penyedia</label>
                                    <input type="text" name="nama_penyedia" class="form-control" placeholder="Nama Penyedia" value="<?php echo $nama_penyedia; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat Penyedia</label>
                                    <input type="text" name="alamat_penyedia" class="form-control" placeholder="Alamat Penyedia"
                                    value="<?php echo $alamat_penyedia; ?>">

 </div>
                            </div>
                        </div>
                                    <input type="hidden" name="id" value="<?php echo $id_penyedia; ?>">
                                    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

                                    <a href="<?php echo site_url('penyedia') ?>" class="btn btn-default">Cancel
                                    </a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <?php $this->load->view('templates/footer'); ?>
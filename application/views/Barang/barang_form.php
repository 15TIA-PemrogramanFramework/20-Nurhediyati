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
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama" value="<?php echo $nama_barang; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input type="text" name="jenis_barang" class="form-control" placeholder="Jenis" value="<?php echo $jenis_barang; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Penyedia</label>
                                        <select class="form-control select2" name="id_penyedia" id="anggota" style="width: 100%;">
                                            <?php foreach ($penyedia as $key => $value) { ?>
                                        <option value="<?php echo $value->id_penyedia; ?>"><?php echo $value->nama_penyedia;?></option>
                                        <?php } ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id_barang; ?>">
                        <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

                        <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel
                        </a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
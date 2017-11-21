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
                                        <select class="form-control select2" name="id_barang" id="anggota" style="width: 100%;">
                                            <?php foreach ($barang as $key => $value) { ?>
                                        <option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang;?></option>

                                        <?php } ?>
                                        </select>
     </div>
                            <form action="<?php echo $action; ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                        <select class="form-control select2" name="id_karyawan" id="anggota" style="width: 100%;">
                                            <?php foreach ($karyawan as $key => $value) { ?>
                                        <option value="<?php echo $value->id_karyawan; ?>"><?php echo $value->nama_karyawan;?></option>

                                        <?php } ?>
                                            </select>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo $tanggal; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Total Belanja</label>
                                    <input type="text" name="total_belanja" class="form-control" placeholder="Total" value="<?php echo $total_belanja; ?>">
                                </div>
                            </div>
                        </div>
</div>
</div>
                        <input type="hidden" name="id" value="<?php echo $id_pembelian; ?>">
                        <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

                        <a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">Cancel
                        </a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
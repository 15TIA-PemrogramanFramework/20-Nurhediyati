<?php $this->load->view('templates/header');?>
<form action="<?php echo $action; ?>" method="POST">
<div class="form-group">
	<label>Nama</label>
	<input type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
</div>
<div class="form-group">
	<label>Prodi</label>
	<input type="text" placeholder="Masukkan Prodi" value="<?php echo $prodi; ?>" class="form-control" name="prodi">
	</div>

	<div class="form-group">
	<label>Daerah</label>
	<input type="text" placeholder="Masukkan Daerah" value="<?php echo $daerah; ?>" class="form-control" name="daerah">

	</div>

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>
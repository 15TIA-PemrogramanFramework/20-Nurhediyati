<?php 
$this->load->view('templates/header');
?>
<div class="row">
<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
<?php echo anchor(site_url("mahasiswa/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>

</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Daerah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($mahasiswa as $key => $value) {?>
<tr>
			<td><?php echo $key+1; ?></td>	
			<td><?php echo $value->nama; ?></td>
			<td><?php echo $value->prodi; ?></td>
			<td><?php echo $value->daerah; ?></td>	
			<td>

			<?php echo anchor(site_url('mahasiswa/edit/'.$value->id),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>
			
			<?php echo anchor(site_url('mahasiswa/delete/'.$value->id),
			'<i class="fa fa-trash"></i>',
			'class="btn btn-danger"'); ?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>

<?php 
$this->load->view('templates/footer');
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	
	} );
</script>
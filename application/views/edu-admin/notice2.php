<?php $this->load->view('edu-admin/template/header'); ?>

<body>
	<div class="container">
		<div class="alert alert-dismissible alert-danger">
			<h4 class="alert-heading">Marks are already added, thus you cannot add the marks again!</h4>
			<p class="mb-0">For updating the marks, you can check the list, <a href="<?php echo base_url(); ?>edu-admin/all_students" class="alert-link">find your respective student here and click view!</a></p>
		</div>
	</div>
</body>

<?php $this->load->view('edu-admin/template/footer'); ?>
<?php

$this->load->helper('form');

echo form_open(ADM_URL . '/publikasi/add');

	echo form_hidden('dosen_id', $dosen_id);
	
	echo form_label('Judul Penelitian', 'judul');
	echo form_input('judul');
	
	echo form_label('Tahun', 'tahun');
	echo form_input('tahun');
	
	echo form_label('Posisi Penulis', 'posisi');
	echo form_input('posisi');
	
	echo form_label('Jurnal', 'media');
	echo form_input('media');
	
	echo form_label('Jenis Jurnal', 'jenis');
	echo form_dropdown('jenis', array(
		0 => '-',
		1 => 'Jurnal Ilmiah Internasional',
		2 => 'Jurnal Ilmiah Terakreditasi',
		3 => 'Jurnal Ilmiah Tak Terakreditasi'
	));
		
	echo form_submit('submit', 'Tambahkan');
	
echo form_close();
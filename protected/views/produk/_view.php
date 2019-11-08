<?php
/* @var $this ProdukController */
/* @var $data Produk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_produk')); ?>:</b>
	<?php echo CHtml::encode($data->nama_produk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_id')); ?>:</b>
	<?php echo CHtml::encode($data->idKategori->kategori); ?>
	<br />


</div>
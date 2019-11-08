<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'action' => Yii::app()->createUrl($this->route),
		'method' => 'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model, 'nama_produk'); ?>
		<?php echo $form->textField($model, 'nama_produk', array('size' => 60, 'maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'stok'); ?>
		<?php echo $form->textField($model, 'stok', array('size' => 60, 'maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'harga'); ?>
		<?php echo $form->textField($model, 'harga', array('size' => 60, 'maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kategori_id'); ?>
		<?php echo $form->dropDownList($model, 'kategori_id', CHtml::listData(kategori::model()->findAll(), 'id', 'kategori'), array("empty" => "Pilih Kategori")); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- search-form -->
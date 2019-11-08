<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'produk-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'nama_produk'); ?>
		<?php echo $form->textField($model, 'nama_produk', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'nama_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'deskripsi'); ?>
		<?php echo $form->textArea($model, 'deskripsi', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'stok'); ?>
		<?php echo $form->textField($model, 'stok', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'harga'); ?>
		<?php echo $form->textField($model, 'harga', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'kategori_id'); ?>
		<?php echo $form->dropDownList($model, 'kategori_id', CHtml::listData(kategori::model()->findAll(), 'id', 'kategori'), array("empty" => "Pilih Kategori")); ?>
		<?php echo $form->error($model, 'kategori_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->
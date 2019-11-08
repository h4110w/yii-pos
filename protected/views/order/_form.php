<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'order-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'pelanggan_id'); ?>
		<?php echo $form->dropDownList($model, 'pelanggan_id', CHtml::listData(pelanggan::model()->findAll(), 'id', 'pelanggan'), array("empty" => "Pilih Pelanggan")); ?>
		<?php echo $form->error($model, 'pelanggan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', CHtml::listData(user::model()->findAll(), 'id', 'user'), array("empty" => "Pilih User")); ?>
		<?php echo $form->error($model, 'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'total'); ?>
		<?php echo $form->textField($model, 'total'); ?>
		<?php echo $form->error($model, 'total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<?php echo Yii::app()->bootstrap->registerBootstrap(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<div id="header">
			<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->

		<div id="mainMbMenu">
			<?php $this->widget('ext.mbmenu.MbMenu', array(
				'items' => array(
					array('label' => 'Home', 'url' => array('/site/index')),
					array(
						'label' => 'User', 'visible' => Yii::app()->user->getLevel() == 1,
						'items' => array(
							array('label' => 'Kelola User', 'url' => array('/user/admin'), 'visible' => Yii::app()->user->getLevel() <= 1),
							array('label' => 'Tambah User', 'url' => array('/user/create'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Lihat User', 'url' => array('/user'), 'visible' => Yii::app()->user->getLevel() >= 1),
						),
					),
					array(
						'label' => 'Level', 'visible' => Yii::app()->user->getLevel() == 1,
						'items' => array(
							array('label' => 'Kelola Level', 'url' => array('/level/admin'), 'visible' => Yii::app()->user->getLevel() <= 1),
							array('label' => 'Tambah Level', 'url' => array('/level/create'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Lihat Level', 'url' => array('/level'), 'visible' => Yii::app()->user->getLevel() == 1),
						),
					),
					array(
						'label' => 'Kategori', 'visible' => Yii::app()->user->getLevel() == 1,
						'items' => array(
							array('label' => 'Kelola Kategori', 'url' => array('/kategori/admin'), 'visible' => Yii::app()->user->getLevel() <= 1),
							array('label' => 'Tambah Kategori', 'url' => array('/kategori/create'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Lihat Kategori', 'url' => array('/kategori'), 'visible' => Yii::app()->user->getLevel() >= 1),
						),
					),
					array(
						'label' => 'Produk', 'visible' => Yii::app()->user->getLevel() == 1,
						'items' => array(
							array('label' => 'Kelola Produk', 'url' => array('/produk/admin'), 'visible' => Yii::app()->user->getLevel() <= 1),
							array('label' => 'Tambah Produk', 'url' => array('/produk/create'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Lihat Produk', 'url' => array('/produk'), 'visible' => Yii::app()->user->getLevel() >= 1),
						),
					),
					array(
						'label' => 'Pelanggan', 'visible' => !Yii::app()->user->isGuest && Yii::app()->user->getLevel() <= 5,
						'items' => array(
							array('label' => 'Kelola Pelanggan', 'url' => array('/pelanggan/admin'), 'visible' => Yii::app()->user->getLevel() <= 1),
							array('label' => 'Tambah Pelanggan', 'url' => array('/pelanggan/create'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Lihat Pelanggan', 'url' => array('/pelanggan'), 'visible' => Yii::app()->user->getLevel() >= 1),
						),
					),
					array(
						'label' => 'Order', 'visible' => !Yii::app()->user->isGuest && Yii::app()->user->getLevel() >= 1,
						'items' => array(
							array('label' => 'Kelola Order', 'url' => array('/order/admin'), 'visible' => Yii::app()->user->getLevel() == 1),
							array('label' => 'Tambah Order', 'url' => array('/order/create'), 'visible' => Yii::app()->user->getLevel() == 6),
							array('label' => 'Lihat Order', 'url' => array('/order'), 'visible' => Yii::app()->user->getLevel() >= 3),
						),
					),
					array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
					array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
				),
			)); ?>
		</div><!-- mainmenu -->
		<?php if (isset($this->breadcrumbs)) : ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
				)); ?>
			<!-- breadcrumbs -->
		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br />
			All Rights Reserved.<br />
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->

	</div><!-- page -->

</body>

</html>
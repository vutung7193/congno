<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="http://www.teamdf.com/jquery-plugins/resources/javascripts/prettify.js"></script>
		<script type="text/javascript" src="http://www.teamdf.com/jquery-plugins/resources/javascripts/docs.js"></script>
		<script type="text/javascript" src=" <?php echo Yii::app()->request->baseUrl; ?>/js/jquery-number/jquery.number.js"></script>
		
		<link rel="stylesheet" href="http://www.teamdf.com/jquery-plugins/resources/stylesheets/prettify.css"/>
		<link rel="stylesheet" href="http://www.teamdf.com/jquery-plugins/resources/stylesheets/docs.css"/>
				
		<script type="text/javascript">
			
			$(function(){
				// Set up the number formatting.
				
				$('#number_container').slideDown('fast');
				
				$('#price').on('change',function(){
					console.log('Change event.');
					var val = $('#price').val();
					$('#the_number').text( val !== '' ? val : '(empty)' );
				});
				
				$('#price').change(function(){
					console.log('Second change event...');
				});
				
				$('#price').number( true, 2 );
				
				
				// Get the value of the number for the demo.
				$('#get_number').on('click',function(){
					
					var val = $('#price').val();
					
					$('#the_number').text( val !== '' ? val : '(empty)' );
				});
			});
		</script>
		
		<link rel="stylesheet" href="http://www.teamdf.com/jquery-plugins/resources/stylesheets/prettify.css" type="text/css" />
		
		<style>
			#number_container{
				border: 1px dotted #d0d0d0;
				padding: 15px;
				margin: 10px;
				display: none;
				background: #fafafa;
			}
			
			div.wrap{
				margin: 10px;
				padding-top: 15px;
			}
			
			button{
				display: block;
				margin-top: 25px;
			}
		</style>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Trang Chủ', 'url'=>array('/congno/admin')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

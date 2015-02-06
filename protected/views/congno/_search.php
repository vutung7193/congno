<?php
/* @var $this CongnoController */
/* @var $model congno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ngay'); ?>
		<?php // echo $form->textField($model,'ngay');
                       $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
'attribute'=>'ngay',
                 'value'=>$model->ngay,
    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
                
                ?>
	</div>
<!--
	<div class="row">
	

	<div class="row">
		<?php echo $form->label($model,'batrieu'); ?>
		<?php echo $form->textField($model,'batrieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ct6'); ?>
		<?php echo $form->textField($model,'ct6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nguyenngocnai'); ?>
		<?php echo $form->textField($model,'nguyenngocnai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tong'); ?>
		<?php echo $form->textField($model,'tong'); ?>
	</div>	<?php echo $form->label($model,'tiengiao'); ?>
		<?php echo $form->textField($model,'tiengiao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'khuongtrung'); ?>
		<?php echo $form->textField($model,'khuongtrung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metri'); ?>
		<?php echo $form->textField($model,'metri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'batrieu'); ?>
		<?php echo $form->textField($model,'batrieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ct6'); ?>
		<?php echo $form->textField($model,'ct6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nguyenngocnai'); ?>
		<?php echo $form->textField($model,'nguyenngocnai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tong'); ?>
		<?php echo $form->textField($model,'tong'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
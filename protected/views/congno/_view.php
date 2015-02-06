<?php
/* @var $this CongnoController */
/* @var $data congno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngay')); ?>:</b>
	<?php echo CHtml::encode($data->ngay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiengiao')); ?>:</b>
	<?php echo CHtml::encode($data->tiengiao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('khuongtrung')); ?>:</b>
	<?php echo CHtml::encode($data->khuongtrung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metri')); ?>:</b>
	<?php echo CHtml::encode($data->metri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batrieu')); ?>:</b>
	<?php echo CHtml::encode($data->batrieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ct6')); ?>:</b>
	<?php echo CHtml::encode($data->ct6); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nguyenngocnai')); ?>:</b>
	<?php echo CHtml::encode($data->nguyenngocnai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tong')); ?>:</b>
	<?php echo CHtml::encode($data->tong); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this CongnoController */
/* @var $model congno */

$this->breadcrumbs=array(
	'Tiền Hàng'=>array('index'),
	'Tạo Mới',
);

$this->menu=array(
//	array('label'=>'List congno', 'url'=>array('index')),
	array('label'=>'Xem Tất Cả', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>
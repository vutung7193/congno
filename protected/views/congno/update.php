<?php
/* @var $this CongnoController */
/* @var $model congno */

$this->breadcrumbs=array(
	'tiền hàng'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Chỉnh Sửa',
);

$this->menu=array(
//	array('label'=>'List congno', 'url'=>array('index')),
	array('label'=>'Thêm Mới Dữ Liệu', 'url'=>array('create')),
//	array('label'=>'View congno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Xem Tất Cả', 'url'=>array('admin')),
);
?>

<h1>Chỉnh Sửa  </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
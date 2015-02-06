<?php
/* @var $this CongnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Congnos',
);

$this->menu=array(
	array('label'=>'Create congno', 'url'=>array('create')),
	array('label'=>'Manage congno', 'url'=>array('admin')),
);
?>

<h1>Congnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

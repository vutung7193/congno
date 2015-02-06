<?php
/* @var $this CongnoController */
/* @var $model congno */

$this->breadcrumbs=array(
	'Congnos'=>array('index'),
	$model->id,
);

$this->menu=array(
//	array('label'=>'List congno', 'url'=>array('index')),
	array('label'=>'Thêm Mới Dữ Liệu', 'url'=>array('create')),
//	array('label'=>'Update congno', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete congno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Xem Tất Cả', 'url'=>array('admin')),
);
?>

<h1>View congno #<?php echo $model->id; ?></h1>
<?php
//$date = Yii::app()->dateFormatter->format("dd MMM yyyy", $model->ngay);


$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ngay',
//            array(
//                'name' =>'ngay',
//                'value'=>$date,
//                
//            ),
		'tiengiao',
		'khuongtrung',
		'metri',
		'batrieu',
		
		'ct6',
		'nguyenngocnai',
		'tong',
	),
)); ?>

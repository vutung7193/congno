<?php
/* @var $this CongnoController */
/* @var $model congno */

$this->breadcrumbs=array(
	'Tiền Hàng'=>array('index'),
	'Quản Lý',
);

$this->menu=array(
//	array('label'=>'List congno', 'url'=>array('index')),
	array('label'=>'Thêm Mới Dữ Liệu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#congno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 style="text-align: center">Số Dư Tổng :</h3> 
<p style="color: red; size:30; text-align: center; font-size: 30px;" ><b ><?php 
       $tung = 0;$SUM = congno::model()->findAll();foreach ($SUM as $SUM){$tung += $SUM->tong ; }
 echo number_format($tung);?> </b></p>




<form method="post">
   Tổng từ ngày <input type="date" name="date1"> tới ngày 
    <input type="date" name="date2">
    <input type="submit" name="submit" value="Kết Quả"><br>

</form>
<?php 
if(isset($_POST['submit']))
{
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
 
    
    $total2 = 0;
   
  
//         $tung = congno::model()->findAll( 'ngay '
//                 
//                 ) ;
         
//    $attribs = array('user_country'=>1 ,'user_gender'=>'M');
$criteria = new CDbCriteria();
$criteria->addBetweenCondition('ngay', $date1, $date2);
$tung = congno::model()->findAll($criteria);
    
    foreach ($tung as $tung)
         {
             
             $total2 += $tung->tong;
         }
//       echo strtotime($tong->ngay);
         
   
//         echo $tong;
         ?>
<h3> Tổng từ ngày  <font color = "red"><?php echo Yii::app()->dateFormatter->format("dd/MM/yyyy", $date1) ?> </font> tới ngày <font color = "red"><?php echo Yii::app()->dateFormatter->format("dd/MM/yyyy",$date2) ?> </font> là   <font color = "red" style="margin-left: 50px;font-weight: bold; font-size: 40px"><?php echo number_format($total2) ?></font></h3>
    
    <?php
    
}

?>

<?php echo CHtml::link('Tìm Kiếm Theo Ngày','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$color = "red";


   
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'congno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'htmlOptions' => array('style' => 'width: 900px;'),
 
	'columns'=>array(
//		'id',
//		'ngay',
//		
//		Yii::app()->dateFormatter->format("dd MMM yyyy", $model->ngay);
//		'tiengiao',
             array(
                'name'=>'ngay',
                'value'=> 'Yii::app()->dateFormatter->format("dd/MM/yyyy", $data->ngay)',
             'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
            array(
                'name'=>'tiengiao',
                'value'=> 'number_format($data->tiengiao)',
                'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
//		'khuongtrung',
             array(
                'name'=>'khuongtrung',
                'value'=> 'number_format($data->khuongtrung)',
                 'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
//		'metri',
             array(
                'name'=>'metri',
                'value'=> 'number_format($data->metri)',
                 'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
//		'batrieu',
             array(
                'name'=>'batrieu',
                'value'=> 'number_format($data->batrieu)',
                 'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
		
//		'ct6',
             array(
                'name'=>'ct6',
                'value'=> 'number_format($data->ct6)',
                 'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold'),
            ),
//		'nguyenngocnai',
             array(
                'name'=>'nguyenngocnai',
                'value'=> 'number_format($data->nguyenngocnai)',
                 'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold; '),
            ),
//		'tong',
             array(
                'name'=>'tong',
                'value'=> 'number_format($data->tong)',
       'htmlOptions'=>array('style'=>'text-align: right; height : 30px; font-size: 15px ; font-weight:bold ; color:red'),
            ),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

<?php
/* @var $this CongnoController */
/* @var $model congno */
/* @var $form CActiveForm */
?>
	

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'congno-form',
     'htmlOptions'          => array(
       
    ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ngay'); ?>
		<?php // echo $form->($model,'ngay'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
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
           
		<?php echo $form->error($model,'ngay'); ?>
	</div>

    
    <table>
        <tr>
            
            <td><div class="row">
                   
		<?php echo $form->labelEx($model,'tiengiao'); ?>
		<?php //  echo $form->textField($model,'tiengiao', array('size'=>10));    
                $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                     'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "tiengiao",
                 
                    ));
                	

                           
                                                 ?>
		<?php echo $form->error($model,'tiengiao'); ?>
                
             
                </div>
            </td>
                
                
            <td><div class="row">
		<?php echo $form->labelEx($model,'khuongtrung'); ?>
		<?php // echo $form->textField($model,'khuongtrung', array('size'=>10));
                 $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                     'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "khuongtrung",
             
                    ));
                
                ?>
		<?php echo $form->error($model,'khuongtrung'); ?>
	</div></td>
         <td><div class="row">
		<?php echo $form->labelEx($model,'batrieu'); ?>
		<?php // echo $form->textField($model,'batrieu', array('size'=>10));
                  $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                     'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "batrieu",
               
                    ));?>
		<?php echo $form->error($model,'batrieu'); ?>
	</div></td>
             <td><div class="row">
		<?php echo $form->labelEx($model,'nguyenngocnai'); ?>
		<?php // echo $form->textField($model,'nguyenngocnai', array('size'=>15)); 
                  $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                    'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "nguyenngocnai",
             
                    ));?>
		<?php echo $form->error($model,'nguyenngocnai'); ?>
	</div></td>
            <td><div class="row">
		<?php echo $form->labelEx($model,'metri'); ?>
		<?php // echo $form->textField($model,'metri', array('size'=>10)); 
                  $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                     'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "metri",
              
                    ));?>
		<?php echo $form->error($model,'metri'); ?>
	</div></td>
           
            <td><div class="row">
		<?php echo $form->labelEx($model,'ct6'); ?>
		<?php // echo $form->textField($model,'ct6', array('size'=>10));
                  $this->widget("application.extensions.formatCurrency.FormatCurrency",
                array(
                     'htmlOptions'=> array('size'=>15),
                    "model" => $model,
                    "attribute" => "ct6",
                
                    ));
                ?>
		<?php echo $form->error($model,'ct6'); ?>
	</div></td>
   
            
        </tr>
    </table>
	

	

	

	

	

	
    

<!--	<div class="row">
		<?php echo $form->labelEx($model,'tong'); ?>
		<?php echo $form->textField($model,'tong'); ?>
		<?php echo $form->error($model,'tong'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Xong' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
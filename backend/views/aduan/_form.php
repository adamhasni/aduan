<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\Aduan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aduan')->textarea(['maxlength' => true]) ?>


    <?php echo $form->field($model, 'dept_id')->dropDownList(
			$dept_list, 
			['prompt'=>'Choose Your Department...']
            ); ?>
            
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

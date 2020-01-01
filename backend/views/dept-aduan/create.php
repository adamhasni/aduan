<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DeptAduan */

$this->title = Yii::t('app', 'Create Dept Aduan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dept Aduans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dept-aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

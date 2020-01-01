<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DeptAduan */

$this->title = Yii::t('app', 'Update Dept Aduan: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dept Aduans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'dept_id' => $model->dept_id, 'aduan_id' => $model->aduan_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dept-aduan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\Aduan */

$this->title = Yii::t('app', 'Update Aduan: {name}', [
    'name' => $model->aduan_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aduans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aduan_id, 'url' => ['view', 'id' => $model->aduan_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aduan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

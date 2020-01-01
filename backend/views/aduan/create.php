<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\Aduan */

$this->title = Yii::t('app', 'Create Aduan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aduans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dept_list' =>$dept_list,
    ]) ?>

</div>

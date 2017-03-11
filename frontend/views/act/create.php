<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Act */

$this->title = Yii::t('app', 'Добавить Акт');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Акты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

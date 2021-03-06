<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Книги');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Добавить книгу'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'isbn',
            'author:ntext',
//            'title:ntext',
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function($model){
                    return Html::a($model->title,['book/view', 'id' => $model->id]);
                },
            ],
            'editor',
            'year',
            'city',
            'publisher',
            'volume',
            'serie',
            'description:ntext',
//            'comment:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'white-space: nowrap'],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>

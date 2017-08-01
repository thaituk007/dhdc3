<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel modules\adhoc\models\DhdcAdhocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dhdc-adhoc-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่ม Transform', ['transform/index'], ['class' => 'btn btn-orange']) ?>
        <?= Html::a('เพิ่มรายงาน', ['create'], ['class' => 'btn btn-blue']) ?>
    </p>
    <?=
    GridView::widget([
        'responsiveWrap' => false,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [ 'style' => 'table-layout: fixed; width: 100%'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title',
                'contentOptions' => ['style' => 'min-width: 660px;max-width: 660px;'],
            ],
            'type',
            'updated_at:datetime:อัพเดท',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]);
    ?>
</div>

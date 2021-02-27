<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString("Daftar ".Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index card card-default">

    <div class="card-header">
        <h3 class="card-title">
            <?= "<?= "; ?> $this->title; <?= "?>"; ?>
        </h3>
    </div>

    <div class="card-body">
        <?php if(!empty($generator->searchModelClass)): ?>
        <?= "<?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
        <?php endif; ?>

        <div style="margin-bottom:20px; text-align:right">
            <?= "<?= " ?>Html::a('<i class="fa fa-plus"></i> Tambah <?= Inflector::camel2words(StringHelper::basename($generator->modelClass)) ?>', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            <?= "<?= " ?>Html::a('<i class="fa fa-print"></i> Export Excel <?= Inflector::camel2words(StringHelper::basename($generator->modelClass)) ?>', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>
        </div>


<?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
        <?= "<?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'header' => 'No',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'contentOptions' => ['style' => 'text-align:center']
                ],
<?php $count = 0; ?>
<?php $tableSchema = $generator->getTableSchema(); ?>
<?php if ($tableSchema !== false) { ?>
<?php foreach ($tableSchema->columns as $column) { ?>
                [
                    'attribute' => '<?= $column->name; ?>',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
<?php } ?>
<?php } ?>
                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
<?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
    </div>
</div>

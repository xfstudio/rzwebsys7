<?php
use yii\helpers\Html;
use common\widgets\admin\Detail;
use common\widgets\admin\CrudLinks;
/**
* @var yii\web\View $this
* @var app\modules\main\models\Comments $model
*/

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => \Yii::t($this->context->tFile, 'Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?=Html::encode($this->title) ?></h1>

    <p>
        <?=CrudLinks::widget(["action"=>CrudLinks::CRUD_VIEW, "model"=>$model])?>
    </p>

    <?=Detail::widget([
        'model' => $model,
    ]) ?>

</div>
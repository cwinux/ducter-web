<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DcmdNodeGroupAttrDefSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcmd-node-group-attr-def-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'attr_id') ?>

    <?= $form->field($model, 'attr_name') ?>

    <?= $form->field($model, 'optional') ?>

    <?= $form->field($model, 'attr_type') ?>

    <?= $form->field($model, 'def_value') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'ctime') ?>

    <?php // echo $form->field($model, 'opr_uid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

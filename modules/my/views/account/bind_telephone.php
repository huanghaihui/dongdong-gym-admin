<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

class TelephoneForm extends \yii\base\Model
{
    public $verifyCode;
    public $telephone;
}

$this->title = '手机绑定';
$model = new TelephoneForm();
?>

<div>
    <div class="container">
        <div class="col-menu">
            <?php require('nav_menu_sidebar.php'); ?>
        </div>
        <div class="col-main">
            <div class="content-box">
                <h3>手机绑定</h3>
                <div class="mc">
                    <div class="mc-body">
                        <?php
                        $form = ActiveForm::begin([
                            'id' => 'updateTeltelephone-form',
                            'options' => ['class' => 'form-horizontal'],
                            'fieldConfig' => [
                                'template' => '<div class="col-md-3">{label}</div><div class="col-md-9">{input}</div>',
                                'labelOptions' => ['class' => 'control-label'],
                            ],
                        ]);
                        ?>
                        <?= $form->field($model, 'telephone')->label('我的手机号码'); ?>
                        <?= $form->field($model, 'verifyCode')->label('填写手机验证码'); ?>
                        <?= Html::button('获取短信验证码', ['class' => 'btn btn-default']);?>
                        <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'submit']);?>

                        <?php $form::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

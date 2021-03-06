<?php
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;

$this->title = '课程表管理';
?>

<div class="homepage-main">
    <div class="container">
        <div class="col-menu">
            <?php require(dirname(__DIR__). '/default/nav_menu_sidebar.php'); ?>
        </div>
        <div class="col-main">
            <div class="content-box">
                <h3>课程管理</h3>
                <div class="mc">
                    <?= Nav::widget([
                        'items' => [
                            [
                                'label' => '课程表',
                                'url' => ['index'],
                                'options' => ['class' => 'active '],
                            ],
                            [
                                'label' => '课程套餐',
                                'url' => ['courses-list'],

                            ]
                        ],
                        'options' => ['class' => 'nav nav-tabs']
                    ]) ?>

                    <div class="mc-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

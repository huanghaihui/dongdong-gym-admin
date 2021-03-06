<?php
use yii\helpers\Html;
use app\assets\MainAsset;
use yii\bootstrap\Nav;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>
</head>
<body>

<?php $this->beginBody() ?>
<div id = "wrapper">
    <div id="gym-header">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="logo" ></span></a>
            </div>
            <div class="navbar-right account">
                <a href=""><span class="portrait"></span></a>
                <div class="account-meta account-info">
                    <?php
                    if (0) {
                        echo '<span class="authentic authentic-success"><a href="">已认证</a></span>';
                    }
                    else echo '<span class="authentic authentic-fail"><a href="">未认证</a></span>';
                    ?>
                    <?= Html::a(Yii::$app->user->identity->username, ['/my/account/profile'], ['class' => 'nick-name']) ?>
                </div>
                <div class="account-meta account-logout">
                    <?= Html::a('退出', ['/passport/account/logout'], ['id' => 'logout', 'data-method' => 'post']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $curModule = Yii::$app->controller->module->getUniqueId();    // get the current module name
        $curRoute = '';
        if ($curModule == 'news')
            $curRoute = 'news/articles';
        else if ($curModule == 'activity')
            $curRoute = 'activity/default';
        else if ($curModule == 'message')
            $curRoute = 'message/default';
        else if ($curModule == 'my')
            $curRoute = 'my/account/profile';

        ?>
        <?php
        $menuItems = [
            ['label' => '场馆主页', 'url' => ['/']],
            ['label' => '资讯管理', 'url' => ['/news/articles']],
            ['label' => '活动管理', 'url' => ['/activity/default']],
            ['label' => '消息中心', 'url' => ['/message/default']],
            ['label' => '账号管理', 'url' => ['/my/account/profile']],
        ];
        echo Nav::widget([
            'options' => ['class' => 'nav nav-pills nav-justified navbar-main'],
            'items' => $menuItems,
            'route' => $curRoute,
        ]);
        ?>
    </div>
    <?= $content ?>
    <div style="clear:both;"></div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; DongDong Tec. <?= date('Y') ?></p>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>

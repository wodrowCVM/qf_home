<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
\frontend\assets\site\IndexAsset::register($this)
?>
<div class="site-index">

    <div id="categorys_and_ads">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                <div class="category_1">
                    <ol class="nav">
                        <li>
                            <a href="#">服装<span class="pull-right"><?=\kartik\icons\Icon::show('chevron-right') ?></i></span></a>
                            <div class="category_2">
                                <div class="category_3">
                                    衣服 裤子
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">墙纸<span class="pull-right"><?=\kartik\icons\Icon::show('chevron-right') ?></i></span></a>
                            <div class="category_2">
                                <div class="category_3">
                                    墙纸
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">桌布<span class="pull-right"><?=\kartik\icons\Icon::show('chevron-right') ?></i></span></a>
                            <div class="category_2">
                                <div class="category_3">
                                    桌布
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="advertisement">
                    <?php
                    echo \yii\bootstrap\Carousel::widget([
                        'controls' => [
                            '<span class="glyphicon glyphicon-chevron-left"></span>',
                            '<span class="glyphicon glyphicon-chevron-right"></span>',
                        ],
                        'items'=>[
                            ['content' => \yii\helpers\Html::img('http://img.mp.itc.cn/upload/20160630/6398240c412a453a8a3a5d2e2e51301a_th.jpg')],
                            ['content' => \yii\helpers\Html::img('http://img.mp.itc.cn/upload/20160630/c7e87816797f4a7ab9751e5b0c9ae438_th.jpg')],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a>
                </p>
            </div>
        </div>
    </div>
</div>

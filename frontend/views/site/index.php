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
                            <a href="#">asdf<span class="pull-right"><?=\kartik\icons\Icon::show('chevron-right') ?></i></span></a>
                            <div class="category_2">
                                <div class="category_3">
                                    123456
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">asdf<span class="pull-right"><?=\kartik\icons\Icon::show('chevron-right') ?></i></span></a>
                            <div class="category_2">
                                <div class="category_3">
                                    test
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="advertisement">
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
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

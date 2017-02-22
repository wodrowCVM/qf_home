<?php

namespace common\models;

use Yii;
class Category extends \common\models\tables\Category
{
    use \kartik\tree\models\TreeTrait;

    public static function tableName()
    {
        return '{{%category}}';
    }
}

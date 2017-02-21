<?php
namespace api\controllers;

/**
 * Site controller
 */
class SiteController extends \deepziyu\yii\rest\Controller
{
    /**
     * 1 Displays test1
     * @desc this is a desc
     * @param int $id 请求参数
     * @return int id id
     * @return string x x-id
     */
    public function actionTest1($id=1)
    {
        return [
            'id'=>$id,
            'x'=>"x-".$id,
        ];
    }

    /**
     * 0 Displays homepage.
     * @desc homepage
     * @return string key key'value
     */
    public function actionIndex()
    {
        return [
            'key' => 'value',
        ];
    }
}

<?php

namespace app\components;
use yii;
use yii\base\Widget;

class TbWidget extends Widget
{
    public $alias;

    public function run()
    {
        $lang = Yii::$app->language;

        $tb = (new \yii\db\Query())
            ->select(['*'])
            ->from('text_blocks')
            ->where(['alias'=>$this->alias])
            ->one();

        return $tb[$lang];

    }
}
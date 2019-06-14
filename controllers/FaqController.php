<?php

namespace app\controllers;
use Yii;
use app\models\Faq;
use app\models\Meta;

class FaqController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'faq'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $faq = Faq::find()->orderBy('position ASC')->all();

        return $this->render('index',['faq'=>$faq]);
    }

}

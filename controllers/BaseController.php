<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Sdocs;
use app\models\Meta;

class BaseController extends Controller
{

    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'base'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $sdocs = Sdocs::find()->orderBy('position ASC')->all();

        return $this->render('index',['sdocs'=>$sdocs]);
    }

}

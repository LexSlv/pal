<?php

namespace app\controllers;
use yii\web\Controller;

use Yii;
use app\models\Meta;

class TrainingController extends Controller
{

    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'training'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        return $this->render('index');
    }

}

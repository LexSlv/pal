<?php

namespace app\controllers;
use yii\web\Controller;

use Yii;
use app\models\Meta;
use app\models\Exams;

class TrainingController extends Controller
{

    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'training'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $exams = Exams::find()->orderBy('Date DESC')->all();


        return $this->render('index',['exams'=>$exams]);
    }

}

<?php

namespace app\controllers;
use Yii;
use app\models\Partners;
use app\models\Meta;

class PartnersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'partners'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $partners = Partners::find()->orderBy('position ASC')->all();
        return $this->render('index', ['partners'=>$partners]);
    }

}

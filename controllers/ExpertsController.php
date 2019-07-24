<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\docs;
use app\models\Meta;

class ExpertsController extends Controller
{

    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'experts'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];


        $links_exp = Docs::find()->where(['alias'=>'links_exp'])->one();
        $docs_exp = Docs::find()->where(['alias'=>'docs_exp'])->one();

        return $this->render('index',['links_exp'=>$links_exp, 'docs_exp'=>$docs_exp]);
    }

}

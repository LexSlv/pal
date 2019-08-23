<?php

namespace app\controllers;
use app\models\Citys;

class ApiController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            // ...
            'contentNegotiator' => [
                'class' => \yii\filters\ContentNegotiator::className(),
                'only' => ['index', 'view'],
                'formatParam' => '_format',
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                    'application/xml' => \yii\web\Response::FORMAT_XML,
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCitys(){



        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        isset($_GET['region']) ? $region = $_GET['region'] : die;

        $citys = Citys::find()
                        ->where(['region_id' => $region])
                        ->orderBy('text ASC')
                        ->asArray()
                        ->all();
        return (\Yii::$app->request->isAjax) ? $this->redirect(['/'], 301) : $citys;


        die;

    }


}

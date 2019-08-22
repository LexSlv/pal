<?php

namespace app\controllers;
use app\models\Citys;

class ApiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCitys(){

        isset($_GET['region']) ? $region = $_GET['region'] : die;

        $citys = Citys::find()
                        ->where(['region_id' => $region])
                        ->orderBy('text ASC')
                        ->asArray()
                        ->all();

        echo json_encode($citys);
        die;

    }


}

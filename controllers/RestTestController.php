<?php

namespace app\controllers;

class RestTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSucces(){
        $arr['succes'] = 1;
        echo json_encode($arr);
        die;
    }

    public function actionError(){
        $arr['error'] = 1;
        $arr['massege'] = "Случилась ошибка!";
        echo json_encode($arr);
        die;
    }

}

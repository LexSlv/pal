<?php

namespace app\controllers;
use yii\web\Controller;

class ExamsController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}

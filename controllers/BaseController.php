<?php

namespace app\controllers;
use yii\web\Controller;

class BaseController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}

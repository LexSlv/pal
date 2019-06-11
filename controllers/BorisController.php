<?php

namespace app\controllers;
use yii\web\Controller;

class BorisController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPage()
    {
        return $this->render('page');
    }



}

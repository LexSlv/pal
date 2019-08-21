<?php

namespace app\controllers;
use yii\web\Controller;


use Yii;
use app\models\Meta;
use app\models\Users;

class LkController extends Controller
{


    public function actionIndex()
    {

        $session = Yii::$app->session;
        $lang = Yii::$app->language;

        if(!isset($session['uid'])){
            return $this->redirect('/'.$lang.'/lk/login/');
        }

        $meta = Meta::find()->where(['alias'=>'cabinet'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        return $this->render('index');
    }


    public function actionLogin(){

        Yii::$app->view->params['title'] = '11';
        Yii::$app->view->params['description'] = '11';
        Yii::$app->view->params['keywords'] = '11';

        $session = Yii::$app->session;
        if(Yii::$app->request->post()){

            $email = Yii::$app->request->post()['email'];
            $password = Yii::$app->request->post()['password'];

            $users = Users::find()
                ->where(['email'=>$email])
                ->asArray()
                ->one();

            if(isset($users['email'])){
                if($users!=''){
                    if($email == $users['email'] && md5($password) == $users['password']){
                        $session->set('uid', $users['id']);
                        return $this->redirect('/lk/');
                    }else{
                        Yii::$app->session->setFlash('fail', 'Неверный логин или пароль!');
                        return $this->redirect('/lk/login/');
                    }
                }else{
                    Yii::$app->session->setFlash('fail', 'Неверный логин или пароль!');
                    return $this->redirect('/lk/login/');
                }
            }else{
                Yii::$app->session->setFlash('fail', 'Неверный логин или пароль!');
                return $this->redirect('/lk/login/');
            }

        }


       return $this->render('login');

    }

    public function actionLogout(){
        $session = Yii::$app->session;
        $session->remove('uid');
        return $this->redirect('/');
    }



}

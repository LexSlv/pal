<?php

namespace app\controllers;
use yii\web\Controller;


use Yii;
use app\models\Meta;
use app\models\Users;
use app\models\UsersRules;
use app\models\Bills;
use app\models\MemberStatus;
use app\models\Department;
use app\models\Regions;
use app\models\Citys;

class LkController extends Controller
{


    public function actionIndex()
    {

        $session = Yii::$app->session;
        $lang = Yii::$app->language;

        if(!isset($session['uid'])){
            return $this->redirect('/'.$lang.'/lk/login/');
        }else{
            $userId = $session['uid'];
        }

        $meta = Meta::find()->where(['alias'=>'cabinet'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $user = Users::find($userId)
            ->join('LEFT JOIN','users_rules', 'users_rules.id = users.status')
            ->asArray()
            ->one();

        $status = UsersRules::find($user['status'])
            ->asArray()
            ->one();

        $bills = Bills::find()
            ->where(['user_id'=>$user['id']])
            ->andWhere(['status'=>0])
            ->asArray()
            ->all();

        $member_status = MemberStatus::find()
            ->where(['id'=>$user['member_status']])
            ->asArray()
            ->one();


        $dep = Department::find()
            ->where(['id'=>$user['dep']])
            ->asArray()
            ->one();

        $region = Regions::find()
            ->where(['id'=>$user['region']])
            ->asArray()
            ->one();


        $city = Regions::find()
            ->where(['id'=>$user['city']])
            ->asArray()
            ->one();

        $user['status'] = $status['text'];
        $user['member_status'] = $member_status['text'];
        $user['dep'] = $dep['text'];
        $user['region_text'] = $region['text'];
        $user['city_text'] = $city['text'];



        return $this->render('index',['user'=>$user, 'bills'=>$bills]);
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

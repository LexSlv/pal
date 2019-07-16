<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\News;
use app\models\Meta;
use yii\data\Pagination;


class NewsController extends Controller
{

    public function actionIndex()
    {
        $lang = Yii::$app->language;

        $meta = Meta::find()->where(['alias'=>'news'])->one();
        Yii::$app->view->params['title'] = $meta['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];

        $news = News::find()->orderBy('date DESC');

        $count = $news->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>2,'pageSizeParam'=>false]);

        $articles = $news->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


        return $this->render('index',['news'=>$articles, 'pagination'=>$pagination]);
    }

    public function actionArticle($alias)
    {
        $news = News::find()->where(['alias'=>$alias])->one();
        $meta = Meta::find()->where(['alias'=>'news'])->one();

        $lang = Yii::$app->language;
        Yii::$app->view->params['title'] = $news['title_'.$lang];
        Yii::$app->view->params['description'] = $meta['description_'.$lang];
        Yii::$app->view->params['keywords'] = $meta['keywords_'.$lang];



        return $this->render('article',['news'=>$news]);
    }
}

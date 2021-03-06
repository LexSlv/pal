<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

//Для загрузки файлов
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->image = UploadedFile::getInstance($model, 'image');
            Image::resize($model->image->tempName, 160, null)->save('uploads/news/small/' . time() . '.' . $model->image->extension);
            Image::resize($model->image->tempName, 1000, null)->save('uploads/news/big/' . time() . '.' . $model->image->extension);
            $model->image = time() . '.' . $model->image->extension;
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if(file_exists(Yii::$app->basePath . '/web/uploads/news/big/' . $this->findModel($id)->image)){
                unlink(Yii::$app->basePath . '/web/uploads/news/big/' . $this->findModel($id)->image);
                unlink(Yii::$app->basePath . '/web/uploads/news/small/' . $this->findModel($id)->image);
            }

            $model->image = UploadedFile::getInstance($model, 'image');
            Image::resize($model->image->tempName, 400, null)->save('uploads/news/small/' . time() . '.' . $model->image->extension);
            Image::resize($model->image->tempName, 1000, null)->save('uploads/news/big/' . time() . '.' . $model->image->extension);
            $model->image = time() . '.' . $model->image->extension;
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(file_exists(Yii::$app->basePath . '/web/uploads/news/big/' . $this->findModel($id)->image)){
            unlink(Yii::$app->basePath . '/web/uploads/news/big/' . $this->findModel($id)->image);
            unlink(Yii::$app->basePath . '/web/uploads/news/small/' . $this->findModel($id)->image);
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

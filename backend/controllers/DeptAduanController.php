<?php

namespace backend\controllers;

use Yii;
use common\models\DeptAduan;
use common\models\DeptAduanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeptAduanController implements the CRUD actions for DeptAduan model.
 */
class DeptAduanController extends Controller
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
     * Lists all DeptAduan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeptAduanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DeptAduan model.
     * @param integer $id
     * @param integer $dept_id
     * @param integer $aduan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $dept_id, $aduan_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $dept_id, $aduan_id),
        ]);
    }

    /**
     * Creates a new DeptAduan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DeptAduan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'dept_id' => $model->dept_id, 'aduan_id' => $model->aduan_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DeptAduan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $dept_id
     * @param integer $aduan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $dept_id, $aduan_id)
    {
        $model = $this->findModel($id, $dept_id, $aduan_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'dept_id' => $model->dept_id, 'aduan_id' => $model->aduan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DeptAduan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $dept_id
     * @param integer $aduan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $dept_id, $aduan_id)
    {
        $this->findModel($id, $dept_id, $aduan_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DeptAduan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $dept_id
     * @param integer $aduan_id
     * @return DeptAduan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $dept_id, $aduan_id)
    {
        if (($model = DeptAduan::findOne(['id' => $id, 'dept_id' => $dept_id, 'aduan_id' => $aduan_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

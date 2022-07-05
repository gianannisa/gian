<?php

namespace app\controllers;

use app\models\Periksa;
use app\models\PeriksaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeriksaController implements the CRUD actions for Periksa model.
 */
class PeriksaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Periksa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeriksaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Periksa model.
     * @param int $id_periksa Id Periksa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_periksa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_periksa),
        ]);
    }

    /**
     * Creates a new Periksa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Periksa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_periksa' => $model->id_periksa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Periksa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_periksa Id Periksa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_periksa)
    {
        $model = $this->findModel($id_periksa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_periksa' => $model->id_periksa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Periksa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_periksa Id Periksa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_periksa)
    {
        $this->findModel($id_periksa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Periksa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_periksa Id Periksa
     * @return Periksa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_periksa)
    {
        if (($model = Periksa::findOne(['id_periksa' => $id_periksa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

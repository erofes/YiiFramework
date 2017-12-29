<?php

namespace app\controllers;

use Yii;
use app\models\MenuLinks;
use app\models\MenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * MenuLinksController implements the CRUD actions for MenuLinks model.
 */
class MenuLinksController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all MenuLinks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MenuLinks model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MenuLinks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MenuLinks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MenuLinks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MenuLinks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function do_comment_dump($comment, $dump)
    {
        echo("<div>".$comment."</div>");
        var_dump($dump);
    }


    public function actionShowMenu()
    {
        $searchModel = new MenuSearch();
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        var_dump($searchModel->search(Yii::$app->request->queryParams)->getModels());
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        var_dump($searchModel->search(Yii::$app->request->queryParams)->getCount());
        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a~</div>");
        var_dump($searchModel->search(Yii::$app->request->queryParams)->getTotalCount());

        echo('<div>$className = "app\controllers";</div>');
        $className = "app\controllers";
        $classFile = Yii::getAlias('@' . str_replace('\\', '/', $className) . '.php');
        var_dump($classFile);

        echo("<div>~a a a a a aa a a a a a a a a a a a a  a a aa  a a a a a a Last~</div>");
        $thing = <<<EOL;
        <div>DUMP FASTER!</div>
        EOL;
        echo($thing);
        //var_dump( '@' . str_replace('\\', '/', $className) . '.php' );

        $className = 'app\models\MenuSearch';
        MenuLinksController::do_comment_dump("Yii::getAlias('@' . str_replace('\ \', '/', $className)  '.php')", Yii::getAlias('@' . str_replace('\\', '/', $className . '.php')));
        MenuLinksController::do_comment_dump("Class mapper", Yii::$classMap);
        
        $rows = (new \yii\db\Query())
            ->select(['Title'])
            ->from('MenuLinks')
            ->where(['Title' => 'Main'])
            ->limit(10)
            ->all();


        return $this->render('viewMenu', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the MenuLinks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MenuLinks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MenuLinks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

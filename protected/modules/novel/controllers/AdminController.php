<?php

namespace humhub\modules\novel\controllers;

use Yii;
use app\modules\novel\models\NovelPage;
use app\modules\novel\models\Chapter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * AdminController
 *
 */
class AdminController extends \humhub\modules\admin\components\Controller
{

    public function actionChapter()
    {
        $chapters = Chapter::find()->orderBy('number ASC')->all();

        return $this->render('chapter/index', array('chapters' => $chapters));
    }

    public function actionChapterCreate(){
      $model = new Chapter();

      if ($model->load(Yii::$app->request->post())) {

        if($model->save())
            return $this->redirect(['chapter']);

      }

      return $this->render('chapter/create', array('model' => $model));

    }

    public function actionChapterUpdate($id)
    {
        $model = Chapter::findOne(['id' => Yii::$app->request->get('id')]);

        if ($model->load(Yii::$app->request->post())) {

          if($model->save())
              return $this->redirect(['chapter']);
        }

        return $this->render('chapter/update', array('model' => $model));
    }

    public function actionChapterDelete()
    {
        $model = Chapter::findOne(['id' => Yii::$app->request->get('id')]);

        if ($model !== null) {
            $model->delete();
        }

        return $this->redirect(['chapter']);
    }

    public function actionIndex()
    {
        $pages = NovelPage::find()->orderBy('page_number ASC')->all();

        return $this->render('novel-page/index', array('pages' => $pages));
    }

    public function actionCreate()
    {
      $model = new NovelPage();

      if ($model->load(Yii::$app->request->post())) {

        $uploadedFile = UploadedFile::getInstance($model, 'page_image');

        // only upload a file if it was attached
        if ($uploadedFile !== null) {
          $model->page_image = UploadedFile::getInstance($model, 'page_image');
          $model->page_image->saveAs('uploads/' . $model->page_image->baseName . '.' . $model->page_image->extension);
          $model->page_image = 'uploads/' . $model->page_image->baseName . '.' . $model->page_image->extension;
        }

        if($model->save())
            return $this->redirect(['index']);
      }

      return $this->render('novel-page/create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = NovelPage::findOne(['id' => Yii::$app->request->get('id')]);
        $old_image = $model->page_image;

        if ($model->load(Yii::$app->request->post())) {
          $uploadedFile = UploadedFile::getInstance($model, 'page_image');

          // only upload a file if it was attached
          if ($uploadedFile !== null) {
            $model->page_image = UploadedFile::getInstance($model, 'page_image');
            $model->page_image->saveAs('uploads/' . $model->page_image->baseName . '.' . $model->page_image->extension);
            $model->page_image = 'uploads/' . $model->page_image->baseName . '.' . $model->page_image->extension;
          } else {
            $model->page_image = $old_image;
          }

          if($model->save())
              return $this->redirect(['index']);
        }

        return $this->render('novel-page/update', array('model' => $model));
    }

    public function actionDelete()
    {
        $model = NovelPage::findOne(['id' => Yii::$app->request->get('id')]);

        if ($model !== null) {
            $model->delete();
        }

        return $this->redirect(['index']);
    }
}

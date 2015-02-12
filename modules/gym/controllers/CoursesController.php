<?php

namespace app\modules\gym\controllers;

use yii\web\Controller;

class CoursesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEdit()
    {
        return $this->render('course_edit');
    }

    public function actionAdd()
    {}

    public function actionDelete()
    {
        $message = [
            'statusCode' => 200,
            'message' => '删除成功',
        ];
        return json_encode($message);
    }

    public function actionCoursesList()
    {
        return $this->render('courses_list');
    }
}

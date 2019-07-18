<?php
/**
 * Created by PhpStorm.
 * User: Alex_out
 * Date: 18.07.2019
 * Time: 11:50
 */

namespace app\controllers;


use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionStudent() {
        $student = "Rey";
        return $this->render('student', ['name' => $student]);
    }
}
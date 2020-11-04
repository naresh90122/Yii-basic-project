<?php

namespace app\controllers;

use yii\web\Controller;

class FirstTestController extends Controller
{
    /**
     * Displays Index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        echo "Yii Page"; die;
        //return $this->render('about');
    }

    public function actionTest()
    {
        return "Test function call"; die;
    }

    public function actionDemoTest()
    {
        return "DemoTest function call"; die;
    }

    public function actionDemo_test()
    {
        return "Demo_Test function call"; die;
    }
}

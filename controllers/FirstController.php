<?php

namespace app\controllers;

use yii\web\Controller;

class FirstController extends Controller
{
    /**
     * Displays Index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        //echo "Yii Page";
        //$this->layout = false; // Not include pre-defined layout if include layout then comment this line

        $response = [];
        $response['name'] = "Naresh Kumar";
        $response['personal_info'] = ['email' => 'naresh90122@gmail.com', 'mobile'=> '7678638797', 'education'=> 'PG'];
        //return $this->renderPartial('service', $response); // Not include pre-defined layout then use renderPartial() function.
        return $this->render('service', $response);
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

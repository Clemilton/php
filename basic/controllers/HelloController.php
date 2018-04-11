<?php
/**
 * Created by PhpStorm.
 * User: clemilton
 * Date: 18/12/17
 * Time: 16:02
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionSaySomething(){
        return $this->render('say-something',[
            
        ]);

    }
}
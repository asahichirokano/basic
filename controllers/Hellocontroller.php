<?php
namespace app\controllers;

class HelloController extends \yii\web\Controller{
    public function actionFirst() {
        echo 'Hello Controller action first';
        return $this->render('first',['title'=>'Asahichrioakano']);
                
        
        
    }
}


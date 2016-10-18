<?php
namespace app\controllers;

class AnamaiController extends \yii\web\Controller{
    public function actionTest() {
        echo 'Anamai Controller action first';
                echo '<hr>';
        $a = 3;
        $b = 5;
        $c = $a*$b;
        //echo $a.'x'.$b.'='.$c;
        
        return $this->render('test',['title'=>'Asahichrioakano',
            'c'=>$c,
            'a'=>$a,
            'b'=>$b
                ]);
                
        
        
    }
}


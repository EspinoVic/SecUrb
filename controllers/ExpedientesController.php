<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class ExpedientesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    //esta funcion recibe datos de la URL, y luego lo pasa a la vista para hacer render.
    public function actionDetail($expediente){
        //get from DB and pass the data to the view 
        return $this->render('detail',['exp'=>$expediente]);
    }
}
?>


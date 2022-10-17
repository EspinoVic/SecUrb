<?php



namespace app\controllers;

use yii\web\Controller;;
use yii\data\Pagination;
use app\models\Country;


class CountryController extends Controller
{

    public function actionIndex(){
        $query = Country::find();


        $pagination = new Pagination(
            [
                'defaultPageSize' => 3,
                'totalCount' => $query->count()

            ]
        );

        $countries = $query->orderBy('Name')
            ->offset($pagination->offset)
            -> limit($pagination->limit)
            ->all();

            return $this->render('index', [
                'countriesVic' => $countries,
                'pagination' => $pagination
            ]);
    }

}
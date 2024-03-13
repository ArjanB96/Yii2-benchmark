<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FrameworkData;

class FrameworkDataController extends Controller
{
    public function actionIndex()
    {
        // Define cache component and cachekey
        $cache = Yii::$app->cache;
        $cacheKey = 'framework_data';

        // Try to retrieve data from cache
        if (!$frameworkData = $cache->get($cacheKey)) {
            // If data is not in cache, retrieve from database
            $frameworkData = FrameworkData::find()->all();

            // Save data in cache for 180 sec
            $cache->set($cacheKey, $frameworkData, 180);
        }

        return $this->render('index', ['frameworkData' => $frameworkData]);
    }
}

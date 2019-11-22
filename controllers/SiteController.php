<?php

namespace app\controllers;

use Bref\Logger\StderrLogger;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $logger = new StderrLogger();

        $logger->error(print_r($_SERVER, true));

        return $this->asJson(['hello' => 'world']);
    }

    public function actionView()
    {
        return $this->render('view.twig', [
            'hello' => 'world'
        ]);
    }
}

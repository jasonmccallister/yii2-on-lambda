<?php

namespace app\controllers;

use Bref\Logger\StderrLogger;
use Parsedown;
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

    public function actionHome()
    {
        $parsedown = new Parsedown();
        $content = file_get_contents('../content/article-one.md');

        return $this->render('view.twig', [
            'hello' => 'world',
            'content' => $parsedown->text($content),
        ]);
    }
}

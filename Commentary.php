<?php

namespace ilyag\commentary;

/**
 * commentary module definition class
 */
class Commentary extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'ilyag\commentary\controllers';
    public $defaultRoute = 'comment';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}

<?php

namespace coreb2c\rbac;

use yii\base\Module;

/**
 * Rbac console module.
 * 
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class RbacConsoleModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'coreb2c\rbac\commands';
}
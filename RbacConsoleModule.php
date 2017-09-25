<?php

namespace coreb2c\rbac;

use yii\base\Module;

/**
 * Rbac console module.
 * 
 * @author Abdullah Tulek <abdullah.tulek@coreb2c.com>
 */
class RbacConsoleModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'coreb2c\rbac\commands';
}
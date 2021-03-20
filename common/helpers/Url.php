<?php

namespace common\helpers;

use Yii;

class Url {

    public static function normalizeRoute($route) {
        if ($route === '') {
            return '/' . Yii::$app->controller->getRoute();
        } elseif (strncmp($route, '/', 1) === 0) {
            return $route;
        } elseif (strpos($route, '/') === false) {
            return '/' . Yii::$app->controller->getUniqueId() . '/' . $route;
        } elseif (($mid = Yii::$app->controller->module->getUniqueId()) !== '') {
            return '/' . $mid . '/' . $route;
        } else
            return '/' . $route;
    }

}

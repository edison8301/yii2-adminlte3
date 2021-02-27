<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/08/2019
 * Time: 06.17
 */

namespace app\components;


use Yii;

class Config
{
    public static function nama()
    {
        return @Yii::$app->params['nama'];
    }

    public static function subnama()
    {
        return @Yii::$app->params['subnama'];
    }

    public static function logo()
    {
        return @Yii::$app->params['logo'];
    }

}
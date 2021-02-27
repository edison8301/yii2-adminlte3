<?php

namespace app\components;

use app\models\UserRole;
use Yii;

class Session
{
    public static function getTahun()
    {
        if (Yii::$app instanceof \yii\console\Application) {
            return date('Y');
        }

        return Yii::$app->session->get('tahun', date('Y'));
    }

    public static function getPlatform()
    {
        return Yii::$app->session->get('platform', 'web');
    }

    public static function setPlatform($value)
    {
        return Yii::$app->session->set('platform', $value);
    }

    public static function isMobile()
    {
        if(Session::getPlatform() == 'mobile') {
            return true;
        }

        return false;
    }

    public static function isPegawai()
    {
        return (int) @Yii::$app->user->identity->id_user_role === UserRole::PEGAWAI;
    }

    public static function getIdPegawai()
    {
        if (static::isPegawai() == false) {
            return null;
        }

        return Yii::$app->user->identity->id_pegawai;

    }

    public static function getUsername()
    {
        return Yii::$app->user->identity->username;
    }

    public static function isAdmin()
    {
        return (int) @Yii::$app->user->identity->id_user_role === UserRole::ADMIN;
    }

}

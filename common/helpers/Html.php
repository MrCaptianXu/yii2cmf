<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/4/1
 * Time: 下午6:28
 */

namespace common\helpers;


use rmrevin\yii\fontawesome\FA;
use yii\helpers\Url;

class Html extends \yii\helpers\Html
{
    public static function icon($name, $options = [])
    {
        return FA::i($name, $options);
    }

    public static function img($src, $options = [])
    {
        $options['src'] = Url::to($src);
        if (strpos($options['src'], 'http') === false) {
            $options['src'] = \Yii::getAlias('@static') . '/' . $options['src'];
        }
        if (!isset($options['alt'])) {
            $options['alt'] = '';
        }
        return static::tag('img', '', $options);
    }
}
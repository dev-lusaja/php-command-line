<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 20/01/18
 * Time: 12:02 AM
 */

namespace Receiver\Factory;


use Base\ReceiverBase;

class ReceiverFactory
{
    public static function getReceiver(string $class = '')
    {
        if (!empty($class)){
            $receiver = new ReceiverBase();
            $receiver->use(new $class());
            return $receiver;
        } else {
            return new ReceiverBase();
        }
    }
}
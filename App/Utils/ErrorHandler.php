<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 03:15 PM
 */

namespace Utils;

class ErrorHandler
{

    public static function setErrorHandler()
    {
        set_error_handler(function ($severity, $message, $filename, $line) {
            if (error_reporting() == 0) {
                return;
            }
            if (error_reporting() & $severity) {
                throw new \ErrorException($message, 0, $severity, $filename, $line);
            }
        });
    }

    /**
     * @param $message
     * @param $trace
     */
    public static function printError($message, $trace)
    {
        print_r('--------------' . PHP_EOL);
        print_r('Message:' . PHP_EOL);
        print_r($message . PHP_EOL);
        print_r('Trace:' . PHP_EOL);
        print_r($trace);
    }
}
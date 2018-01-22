<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 11:44 PM
 */

namespace App\Base;


interface ReceiverInterface
{
    public function out(string $message);

    public function error(string $message);

}
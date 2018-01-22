<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 11:56 PM
 */

namespace App\Receiver;

use League\CLImate\Util\Writer\WriterInterface;


class CloudWatchReceiver implements WriterInterface
{
    public function write($content)
    {
        var_dump(["cloudWatch" => $content]);exit;
    }

}
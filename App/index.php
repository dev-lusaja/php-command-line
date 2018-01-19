<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

chdir(dirname(__DIR__));
require_once('vendor/autoload.php');

use Command\Factory\CommandFactory;
use Utils\ErrorHandler;

try{
    ErrorHandler::setErrorHandler();
    $command = CommandFactory::getCommand($argv[1]);
    (new Invoker\Invoker())
        ->setCommand($command)
        ->run();
} catch (\Exception $e){
    ErrorHandler::printError($e->getMessage(), $e->getTraceAsString());
}

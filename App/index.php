<?php
chdir(dirname(__DIR__));
require_once('vendor/autoload.php');

$commandFile = glob('App/Command/' . $argv[1]. 'Command.php');
if (count($commandFile) == 1){
    $command = '\\Command\\' . basename($commandFile[0], '.php');
    $invoker = new Command\Invoker\Invoker();
    $invoker->setCommand(new $command());
    $invoker->run();
} else {
    $commands = glob('App/Command/*Command.php');
    echo "Command list:" . PHP_EOL;
    foreach ($commands as $command){
        echo basename($command, 'Command.php') . PHP_EOL;
    }
}
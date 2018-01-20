<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 03:23 PM
 */

namespace Command\Factory;

/**
 * Class CommandFactory
 * @package Command\Factory
 */
class CommandFactory
{
    private static $file = null;

    /**
     * @param $name
     */
    private static function getFileName($name)
    {
        $fileName = glob('App/Command/' . $name . 'Command.php');
        if (count($fileName) > 0){
            self::$file = basename($fileName[0], '.php');
        }
    }

    /**
     * @param $name
     * @return \Base\CommandInterface
     */
    public static function getCommand($name)
    {
        self::getFileName($name);
        if (!empty(self::$file)){
            $className = '\\Command\\' . self::$file;
            $Object = new $className();
            $Object();
            return $Object;
        } else {
            $commands = glob('App/Command/*Command.php');
            $climate = new \League\CLImate\CLImate;
            $climate->draw('404');
            $data = [];
            $climate->red()->out('Command not found:');
            foreach ($commands as $command){
                $data[] = ['Available Commands' => basename($command, 'Command.php')];
            }
            $climate->table($data);
            die();
        }
    }
}
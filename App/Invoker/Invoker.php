<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 02:19 PM
 */

namespace Invoker;

use Base\CommandInterface;

/**
 * Class Invoker
 * @package Invoker
 */
class Invoker
{
    /**
     * @var $command CommandInterface
     */
    private $command;

    /**
     * @param CommandInterface $command
     * @return $this
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
        return $this;
    }

    public function run()
    {
        $this->command->execute();
    }
    
}
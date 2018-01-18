<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 02:19 PM
 */

namespace Command\Invoker;

use Command\Base\CommandInterface;

class Invoker
{
    /**
     * @var $command CommandInterface
     */
    private $command;

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command){
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
    
}
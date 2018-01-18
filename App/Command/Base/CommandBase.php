<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 11:47 AM
 */

namespace Command\Base;

use League\CLImate\CLImate;

abstract class CommandBase extends CLImate{

    /**
     * @param Argument[] ...$args
     */
    protected function createCommand(Argument ...$args){
        $arrayArgs = (new Argument('help'))->setPrefix('h')->setLongPrefix('help')->setDescription('Prints a usage statement')->setNoValue(true)->toArray();
        /**
         * @var $arg Argument
         */
        foreach ($args as $arg) {
            $arrayArgs = array_merge($arrayArgs, $arg->toArray());
        }
        $this->arguments->add($arrayArgs);
        $this->arguments->parse();
        $this->isHelp();
    }

    private function isHelp(){
        if ($this->arguments->defined('help')){
            $this->usage();
            die();
        }
    }
}
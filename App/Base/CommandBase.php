<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 11:47 AM
 */

namespace Base;

use League\CLImate\CLImate;

/**
 * Class CommandBase
 * @package Base
 */
class CommandBase extends CLImate{

    /**
     * @param Argument[] ...$arrayArguments
     */
    public $arrayArguments = [];

    /**
     * CommandBase constructor.
     */
    public function __invoke()
    {
        parent::__construct();
        $this->setArguments($this->arrayArguments);
        $this->parseArguments();
        $this->isHelp();
    }

    /**
     * @param Argument[] ...$args
     */
    protected function setArguments(array $args)
    {
        $arrayArgs = (new Argument('help'))->setPrefix('h')->setLongPrefix('help')->setDescription('Prints a usage statement')->setNoValue(true)->toArray();
        /**
         * @var $arg Argument
         */
        foreach ($args as $arg) {
            $arrayArgs = array_merge($arrayArgs, $arg->toArray());
        }
        $this->arguments->add($arrayArgs);
    }

    protected function parseArguments()
    {
        $this->arguments->parse();
    }

    protected function isHelp()
    {
        if ($this->arguments->defined('help')){
            $this->usage();
            die();
        }
    }
}
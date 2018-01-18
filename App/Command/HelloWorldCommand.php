<?php
namespace Command;

use Command\Base\CommandBase;
use Command\Base\CommandInterface;
use Command\Base\Argument;

class HelloWorldCommand extends CommandBase implements CommandInterface{

    /**
     * HelloWorldCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->createCommand(
            (new Argument('message'))
                ->setPrefix('m')
                ->setLongPrefix('message')
                ->setDescription('lalala')
                ->setDefaultValue('hello world')
                ->setNoValue(false)
        );
    }

    public function execute(){
        $this->out($this->arguments->get('message'));
    }

}
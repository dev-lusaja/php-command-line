<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

namespace Command;

use Base\CommandBase;
use Base\CommandInterface;
use Receiver\Factory\ReceiverFactory;

/**
 * Class HelloWorldCommand
 * @package Command
 */
class HelloWorldCommand extends CommandBase implements CommandInterface {

    private $receiver;

    public function __construct()
    {
        $this->receiver = ReceiverFactory::getReceiver();
    }

    public function execute(){
        $this->receiver->out('Hello World...!!!');
    }
}
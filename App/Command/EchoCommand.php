<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

namespace Command;

use Base\CommandBase;
use Base\Argument;
use Base\CommandInterface;
use Receiver\CloudWatchReceiver;
use Receiver\Factory\ReceiverFactory;

/**
 * Class EchoCommand
 * @package Command
 */
class EchoCommand extends CommandBase implements CommandInterface {

    private $receiver;

    public function __construct()
    {
        $this->receiver = ReceiverFactory::getReceiver(CloudWatchReceiver::class);
        $this->arrayArguments = [
            (new Argument('message'))
                ->setPrefix('m')
                ->setLongPrefix('message')
                ->setDescription('print a message')
                ->setCastTo('string'),
        ];
    }

    public function execute(){
        $this->receiver->out($this->arguments->get('message'));
    }
}
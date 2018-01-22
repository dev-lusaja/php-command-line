<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

namespace App\Command;

use App\Base\CommandBase;
use App\Base\Argument;
use App\Base\CommandInterface;
use App\Receiver\CloudWatchReceiver;
use App\Receiver\Factory\ReceiverFactory;

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
        try{
            if($this->arguments->defined('message')){
                $this->receiver->out($this->arguments->get('message'));
            } else {
                throw new \Exception('Message not defined for Echo command');
            }
        } catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}
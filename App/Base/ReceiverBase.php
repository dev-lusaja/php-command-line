<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

namespace Base;

use League\CLImate\CLImate;
use League\CLImate\Util\Writer\WriterInterface;

/**
 * Class Receiver
 * @package Receiver
 */
class ReceiverBase implements ReceiverInterface
{
    private $receiverBase;

    public function __construct()
    {
        $this->receiverBase= new CLImate();
    }

    public function out(string $message)
    {
        $this->receiverBase->out($message);
    }

    public function error(string $message)
    {
        $this->receiverBase->error($message);
    }

    /**
     * @param WriterInterface $receiver
     */
    public function use(WriterInterface $receiver)
    {
        $receiverName = get_class($receiver);
        $this->receiverBase->output->add($receiverName, $receiver);
        $this->receiverBase->output->defaultTo($receiverName);
    }
}
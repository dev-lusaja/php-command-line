<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 19/01/18
 * Time: 04:27 PM
 */

namespace App\Base;

use League\CLImate\CLImate;
use League\CLImate\Util\Writer\WriterInterface;

/**
 * Class Receiver
 * @package Receiver
 */
class ReceiverBase implements ReceiverInterface
{
    private $receiverBase;

    /**
     * ReceiverBase constructor.
     */
    public function __construct()
    {
        $this->receiverBase = new CLImate();
    }

    /**
     * @param string $message
     */
    public function out(string $message)
    {
        $this->receiverBase->out($message);
    }

    /**
     * @param string $message
     */
    public function error(string $message)
    {
        $this->receiverBase->error($message);
    }

    /**
     * @param string $message
     */
    public function info(string $message)
    {
        $this->receiverBase->info($message);
    }

    /**
     * @param string $message
     */
    public function comment(string $message)
    {
        $this->receiverBase->comment($message);
    }

    /**
     * @param string $message
     */
    public function whisper(string $message)
    {
        $this->receiverBase->whisper($message);
    }

    /**
     * @param string $message
     */
    public function shout(string $message)
    {
        $this->receiverBase->shout($message);
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
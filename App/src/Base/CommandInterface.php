<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 11:47 AM
 */

namespace App\Base;

/**
 * Interface CommandInterface
 * @package Base
 */
interface CommandInterface
{
    public function __construct();

    public function __invoke();

    public function execute();
}
<?php

namespace Juckknife\AlibabaOpen\interfaces;

use Juckknife\AlibabaOpen\core\Container;

/**
 * Interface Provider
 * @package Juckknife\AlibabaOpen\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}

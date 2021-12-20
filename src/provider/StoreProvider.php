<?php

namespace Juckknife\AlibabaOpen\provider;

use Juckknife\AlibabaOpen\core\Container;
use Juckknife\AlibabaOpen\functions\order\Order;
use Juckknife\AlibabaOpen\functions\order\Refund;
use Juckknife\AlibabaOpen\interfaces\Provider;

/**
 * Class StoreProvider
 * @package Juckknife\AlibabaOpen\provider
 */
class StoreProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['order']  = function ($container) {
            return new Order($container);
        };
        $container['refund'] = function ($container) {
            return new Refund($container);
        };
    }
}

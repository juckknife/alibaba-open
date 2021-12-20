<?php


namespace Juckknife\AlibabaOpen\provider;


use Juckknife\AlibabaOpen\core\Container;
use Juckknife\AlibabaOpen\functions\order\Logistics;
use Juckknife\AlibabaOpen\functions\product\Product;
use Juckknife\AlibabaOpen\interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product']   = function ($container) {
            return new Product($container);
        };
        $container['logistics'] = function ($container) {
            return new Logistics($container);
        };
    }
}
<?php

namespace Juckknife\AlibabaOpen;

use Juckknife\AlibabaOpen\core\ContainerBase;
use Juckknife\AlibabaOpen\provider\ProductProvider;
use Juckknife\AlibabaOpen\provider\StoreProvider;

/**
 * Class Application
 * @property \Juckknife\AlibabaOpen\functions\product\Product product
 * @property \Juckknife\AlibabaOpen\functions\order\Order order
 * @property \Juckknife\AlibabaOpen\functions\order\Logistics logistics
 * @property \Juckknife\AlibabaOpen\functions\order\Refund refund
 */
class AlibabaClient extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        StoreProvider::class,
        ProductProvider::class,
        //...其他服务提供者
    ];
}

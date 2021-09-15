<?php


namespace Code;



use Swoft\Bean\Annotation\Mapping\Bean;
use Code\MarsInterface;
use Swoft\Rpc\Client\Annotation\Mapping\Reference;


/**
 * Class RpcService
 * @since 2.0
 * @package Code
 * @Bean ("RpcService")
 */
class RpcService
{
    /**
     * @Reference (pool="user.pool")
     * @var MarsInterface
     */
    public $marsService;


}
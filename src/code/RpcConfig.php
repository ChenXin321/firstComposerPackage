<?php


namespace Code;

use Swoft\Rpc\Client\Client as ServiceClient;
use Swoft\Rpc\Client\Pool as ServicePool;
/**
 * Class RpcConfig
 * @package Code
 * @since 2.0
 */
class RpcConfig
{

    public static function rpcConfig(){
        return[
            'user'               => [
                'class'   => ServiceClient::class,
                'host'    => '121.4.102.158',
                'port'    => 18309,
                'setting' => [
                    'timeout'         => 0.5,
                    'connect_timeout' => 12.0,
                    'write_timeout'   => 10.0,
                    'read_timeout'    => 0.5,
                ],
                'packet'  => bean('rpcClientPacket')
            ],
            'user.pool'          => [
                'class'  => ServicePool::class,
                'client' => bean('user'),
            ]
        ];
    }

}
<?php

class FactoryTest extends \PHPUnit_Framework_TestCase 
{
    public function testConstructor()
    {
        $cache = $this->getMockBuilder('FM\Cache\CacheInterface')->getMock();

        $factory = new \FM\Keystone\Client\Factory($cache);

        $this->assertInstanceOf('\FM\Keystone\Client\Factory', $factory);
    }
}

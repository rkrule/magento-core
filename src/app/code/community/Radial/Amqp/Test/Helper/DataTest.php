<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Radial_Amqp_Test_Helper_DataTest extends Radial_Core_Test_Base
{
    /**
     * Provide a sample, possibly templated queue name, a set of core config values,
     * and the expected queue name.
     * @return array
     */
    public function provideQueueNames()
    {
        return array(
            array('q.Test.{store_id}', array('storeId' => 'STORECODE'), 'q.Test.STORECODE'),
            array('q.Test', array('storeId' => 'STORECODE'), 'q.Test'),
        );
    }
    /**
     * Test replacing placeholder values within the queue names with config values.
     * @dataProvider provideQueueNames
     */
    public function testProcessQueueName($queueName, $configValues, $expected)
    {
        $config = $this->buildCoreConfigRegistry($configValues);
        $helper = Mage::helper('radial_amqp');
        $this->assertSame(
            $expected,
            EcomDev_Utils_Reflection::invokeRestrictedMethod($helper, '_processQueueName', array($queueName, $config))
        );
    }
}
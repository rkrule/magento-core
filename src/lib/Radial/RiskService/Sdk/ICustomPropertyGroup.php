<?php
/**
 * Copyright (c) 2015 Radial, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Radial
 * Magento Extensions End User License Agreement
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://www.radial.com/files/pdf/Magento_Connect_Extensions_EULA_050714.pdf
 *
 * @copyright   Copyright (c) 2015 Radial, Inc. (http://www.radial.com/)
 * @license     http://www.radial.com/files/pdf/Magento_Connect_Extensions_EULA_050714.pdf  Radial Magento Extensions End User License Agreement
 *
 */

interface Radial_RiskService_Sdk_ICustomPropertyGroup extends Countable, Iterator, ArrayAccess, Radial_RiskService_Sdk_IIterable
{
	const CUSTOM_PROPERTY_MODEL = 'Radial_RiskService_Sdk_CustomProperty';
	const ROOT_NODE = 'CustomPropertyGroup';
	const XML_NS = 'http://api.gsicommerce.com/schema/checkout/1.0';
	const SUBPAYLOAD_XPATH = 'CustomProperty';

        /**
         * get an empty custom property
         *
         * @return Radial_RiskService_Sdk_ICustomProperty
         */
        public function getEmptyCustomProperty();

	/**
	 * @return  string
	 */
	public function getName();

	/**
	 * @param   string
	 * @return  self
	 */
	public function setName($name);
}

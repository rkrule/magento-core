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

interface Radial_RiskService_Sdk_Http_IHeaders extends Countable, Iterator, ArrayAccess, Radial_RiskService_Sdk_IIterable
{
	const HTTP_HEADER_MODEL = 'Radial_RiskService_Sdk_Http_Header';
	const ROOT_NODE = 'HttpHeaders';
	const SUBPAYLOAD_XPATH = 'HttpHeader';
	const XML_NS = 'http://api.gsicommerce.com/schema/checkout/1.0';

	/**
	 * get an empty http header
	 *
	 * @return Radial_RiskService_Sdk_Http_IHeader
	 */
	public function getEmptyHttpHeader();
}

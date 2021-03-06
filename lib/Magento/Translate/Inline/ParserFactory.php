<?php
/**
 * Parser factory
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Translate\Inline;

class ParserFactory
{
    /**
     * Default instance type
     */
    const DEFAULT_INSTANCE_TYPE = 'Magento\Translate\Inline\ParserInterface';

    /**
     * Object Manager
     *
     * @var \Magento\ObjectManager
     */
    protected $_objectManager;

    /**
     * Object constructor
     * @param \Magento\ObjectManager $objectManager
     */
    public function __construct(\Magento\ObjectManager $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Return instance of inline translate parser object
     *
     * @return \Magento\Translate\Inline\ParserInterface
     */
    public function get()
    {
        return $this->_objectManager->get(self::DEFAULT_INSTANCE_TYPE);
    }

    /**
     * @param array $arguments
     * @return \Magento\Translate\Inline\ParserInterface
     */
    public function create(array $arguments = array())
    {
        return $this->_objectManager->create(self::DEFAULT_INSTANCE_TYPE, $arguments);
    }
}

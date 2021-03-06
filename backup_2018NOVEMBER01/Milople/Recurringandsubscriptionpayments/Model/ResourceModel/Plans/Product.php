<?php	 
/**
*
* Do not edit or add to this file if you wish to upgrade the module to newer
* versions in the future. If you wish to customize the module for your
* needs please contact us to https://www.milople.com/contact-us.html
*
* @category    Ecommerce
* @package     Milople_Recurringandsubscriptionpayments
* @copyright   Copyright (c) 2017 Milople Technologies Pvt. Ltd. All Rights Reserved.
* @url         https://www.milople.com/magento2-extensions/ecurring-and-subscription-payments-m2.html
*
**/
namespace Milople\Recurringandsubscriptionpayments\Model\ResourceModel\Plans;
class Product extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
		/**
     * Define main table
     */
    protected function _construct()
		{
	    $this->_init('recurringandsubscriptionpayments_plans_product', 'product_id');
			$this->_isPkAutoIncrement = false; // Add this when the primary key is not an auto_increment field
    }
}



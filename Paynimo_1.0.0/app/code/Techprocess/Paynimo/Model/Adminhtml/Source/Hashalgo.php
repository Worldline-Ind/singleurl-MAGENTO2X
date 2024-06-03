<?php
/**
* Custom Options for paynimo backend configuration for WSD Locator Url
**/

namespace Techprocess\Paynimo\Model\Adminhtml\Source;

use Magento\Payment\Model\Method\AbstractMethod;

class Hashalgo implements \Magento\Framework\Option\ArrayInterface

{
    protected $_options;

    public function toOptionArray()
    {
         $trans_req = array(
           array('value' => 'SHA3-512', 'label' => 'SHA3-512'),
           array('value' => 'SHA3-256', 'label' => 'SHA3-256'),
       );
 
       return $trans_req;
    }
}
?>
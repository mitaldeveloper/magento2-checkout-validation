<?php
namespace Mital\Checkout\Block\Checkout;
class LayoutProcessor
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
            /*For shipping address form*/

            $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['telephone']['validation']['custom-validate-telephone'] = true;    
                   
            /*For billing address form*/

            foreach ($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
            ['payment']['children']['payments-list']['children'] as $key => $payment) { 
                /* Telephone Billing Address */
                if (isset($payment['children']['form-fields']['children']['telephone'])) {
                    $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                            ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
                ['telephone']['validation'] = ['required-entry' => true, 'custom-validate-telephone' => true];
                }
            }
          
        return $jsLayout;
    }
}
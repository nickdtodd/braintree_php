<?php
/**
 * VenmoSdk payment method codes used for testing purposes
 *
 * @package    Braintree
 * @subpackage Test
 * @copyright  2010 Braintree Payment Solutions
 */
class Braintree_Test_VenmoSdk
{
    public static $visaPaymentMethodCode = "stub-4111111111111111";

    public static function generateTestPaymentMethodCode($number) {
        return "stub-" . $number;
    }
}

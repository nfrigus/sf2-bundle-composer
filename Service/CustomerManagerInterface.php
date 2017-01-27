<?php

namespace CC\OROCRM\ConnectBundle\Service;

use CC\OROCRM\ConnectBundle\Model\Customer;

/**
 * OroCRM customer integration facade interface
 */
interface CustomerManagerInterface
{
    /**
     * Set contact tag.
     * Tags can be used to identify Customer email subscriptions.
     * Covers UC1, UC2.
     *
     * @param string $email Email to identify Customer Account
     * @param string $tag   Tag to be added to Customer Account
     * @param string $lang  Language
     */
    public function setTag($email, $tag);

    /**
     * Create or update Customer Account data
     *
     * @param Customer $customer
     */
    public function saveCustomer(Customer $customer);

    /**
     * Marks user as deleted and sends notification Email.
     *
     * @param Customer $customer
     */
    public function deleteCustomer(Customer $customer);

    /**
     * Same as self::deleteCustomer using email instead of customer entity.
     *
     * @param string $email Email to identify Customer Account
     */
    public function deleteCustomerByEmail($email);
}

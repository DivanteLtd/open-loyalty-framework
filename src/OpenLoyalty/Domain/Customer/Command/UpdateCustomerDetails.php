<?php

namespace OpenLoyalty\Domain\Customer\Command;

use OpenLoyalty\Domain\Customer\CustomerId;

/**
 * Class UpdateCustomerDetails.
 */
class UpdateCustomerDetails extends CustomerCommand
{
    /**
     * @var array
     */
    protected $customerData;

    /**
     * UpdateCustomer constructor.
     *
     * @param CustomerId $customerId
     * @param array      $customerData
     */
    public function __construct(CustomerId $customerId, array $customerData)
    {
        parent::__construct($customerId);
        $this->customerData = $customerData;
    }

    /**
     * @return array
     */
    public function getCustomerData()
    {
        return $this->customerData;
    }
}

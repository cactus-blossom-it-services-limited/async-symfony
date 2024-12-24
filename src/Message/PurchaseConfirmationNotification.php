<?php

namespace App\Message;

class PurchaseConfirmationNotification
{

    public function __construct(private int|string $orderId)
    {
    }

    /**
     * @return object
     */
    public function getOrderId(): int|string
    {
        return $this->orderId;
    }

}
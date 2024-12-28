<?php

namespace App\Message\Event;

class OrderSavedEvent
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
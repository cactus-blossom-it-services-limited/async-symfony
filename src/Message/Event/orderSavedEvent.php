<?php

namespace App\Message\Event;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class orderSavedEvent
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
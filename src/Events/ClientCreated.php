<?php

namespace Laravel\Passport\Events;

class ClientCreated
{
    /**
     * The ID of the newly created client.
     *
     * @var string
     */
    public $clientId;

    /**
     * The ID of the user associated with the client.
     *
     * @var string
     */
    public $userId;

    /**
     * Create a new event instance.
     *
     * @param  string  $tokenId
     * @param  string  $userId
     * @param  string  $clientId
     * @return void
     */
    public function __construct($clientId, $userId)
    {
        $this->clientId = $clientId;
        $this->userId = $userId;
    }
}

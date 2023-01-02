<?php

namespace MadeByBob\Carbone\Requests;

use MadeByBob\Carbone\Carbone;
use Sammyjo20\Saloon\Clients\MockClient;
use Sammyjo20\Saloon\Http\SaloonRequest;
use MadeByBob\Carbone\Responses\CarboneResponse;

/**
 * @method CarboneResponse send(MockClient $mockClient = null, bool $asynchronous = false)
 */
class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = Carbone::class;
}
